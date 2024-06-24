<?php

namespace App\Http\Controllers;

use App\Models\ApiMidtrans;
use App\Models\Orders;
use App\Models\Rp199;
use App\Models\Rp288;
use App\Models\Rp77k;
use App\Models\Rp99k;
use App\Models\Sixpack4;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    public function __construct()
    {
        // $this->apiModels = new ApiModels();
    }
    
    function productOrder($kode)
    {
        $dataOrder = null;
        $rp99k = Rp99k::where('kode', $kode)->first();
        $rp77k = Rp77k::where('kode', $kode)->first();
        $rp288k = Rp288::where('kode', $kode)->first();
        $rp199k = Rp199::where('kode', $kode)->first();
        $sc488k = Sixpack4::where('kode',$kode)->first();
        
        if ($rp99k) { 
            $dataOrder = $rp99k; 
            $dataOrder->order_name = 'rp99k';
        }
        if ($rp77k) { 
            $dataOrder = $rp77k; 
            $dataOrder->order_name = 'rp77k';
        }
        if ($rp288k) { 
            $dataOrder = $rp288k; 
            $dataOrder->order_name = '288 membership';
        }
        if ($rp199k) { 
            $dataOrder = $rp199k; 
            $dataOrder->order_name = '199 membership';
        }
        if ($sc488k) { 
            $dataOrder = $sc488k; 
            $dataOrder->order_name = 'Sixpack Challenge Membership';
        }
        return $dataOrder;
    }

    public function status($id)
    {
        $dataStatus = new ApiMidtrans();
        $dataOrder = $this->productOrder($id);
        if ($dataOrder === null) { return redirect()->route('order.notData'); }
        $data = [
            'status' => $dataStatus->getStatusOrder($id),
            'dataOrder' => $dataOrder
        ];
        $order = Orders::where('order_id', $id)->first();
        if (!$order) {
            // dd($data);
            if ($data['status']['status_code'] == 404) {
                return redirect()->route('order.notData');
            } else {
                $order = Orders::create([
                    'order_name' => $dataOrder->order_name,
                    'order_id' => $dataOrder->kode,
                    'gross_amount' => $data['status']['gross_amount'],
                    'status' => $data['status']['transaction_status'],
                    'transaction_id' => $data['status']['transaction_id'],
                    'payment_type' => $data['status']['payment_type'],
                    'json_midtrans' => json_encode($data['status'])
                ]);
            }
        }
        if ($order->status !== $data['status']['transaction_status']) {
            // echo "rubah status";
            Orders::where('order_id', $order->order_id)
                ->update([
                    'status' => $data['status']['transaction_status'],
                    'json_midtrans' => json_encode($data['status'])
                ]);
        }
        // $clubs = $this->apiModels->allClubs()['rows'];
        // $clubs_kode['name'];
        // $url = "https://wa.me/628179188880?text=Hallo%20Urban%20Athletes%0ASaya%20%7Bnama%7D%0ABerikut%20rincian%20pesanan%20Saya%20:%0A%0AKode%20Pembayaran%09:%20%7Bkode%7D%0ATotal%20Bayar%09:%20Rp%2099.000,00%0AClub%20%09:%20%7Bclub_name%7D";
        // return Redirect::away($url);
        // dd($data);

        return view("public/member/daftar/order/status", $data);
    }

    public function search($id = NULL)
    {
        return view("public/member/daftar/order/search");
    }

    public function searchDetail($id = NULL)
    {
        $dataOrder = NULL;
        $dataStatus = new ApiMidtrans();
        $order = Orders::where('order_id', $id)->first();
        $midtrans = $dataStatus->getStatusOrder($id);
        $productOrder = $this->productOrder($id);
        if (!$order && $midtrans['status_code'] == 200) {
            // Sudah tersimpan di midtrans tapi belum tersipan di local
            $dataMidtrans = json_encode($midtrans);
            if ($productOrder) {
                $order = Orders::create([
                    'order_name' => $productOrder->order_name,
                    'order_id' => $productOrder->kode,
                    'gross_amount' => $midtrans['gross_amount'],
                    'status' => $midtrans['transaction_status'],
                    'transaction_id' => $midtrans['transaction_id'],
                    'payment_type' => $midtrans['payment_type'],
                    'json_midtrans' => $dataMidtrans
                ]);
            }
        }
        if ($productOrder) {
            $dataOrder = $order->toArray();
            $dataOrder += $productOrder->toArray();
        }
        $data = [
            'status' => $midtrans,
            'dataOrder' => $dataOrder
        ];
        // dd($data);
        return view("public/member/daftar/order/searchDetail", $data);
    }

    public function save(Request $request)
    {
        $dataOrder = json_decode($request->data_json_bayar);
        $order = Orders::create([
            'order_name' => $request->order_name,
            'order_id' => $request->kode,
            'gross_amount' => $dataOrder->gross_amount,
            'status' => $dataOrder->transaction_status,
            'transaction_id' => $dataOrder->transaction_id,
            'payment_type' => $dataOrder->payment_type,
            'json_midtrans' => $request->data_json_bayar
        ]);
        // dd($order);
        return redirect()->route('order.status', ['id' => $order->order_id]);
    }

    public function notData()
    {
        return view("public/member/daftar/order/notData");
    }
}
