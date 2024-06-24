<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\ApiMidtrans;
use App\Models\ApiModels;
use App\Models\Orders;
use App\Models\Sixpack4;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Sixpack4Controller extends Controller
{
    public function __construct()
    {
        $this->apiModels = new ApiModels();
    }

    public function daftar()
    {
        // dd(date('YmdHi'));
        return view("public/promo/sixpack-challenge/daftar", ['clubs' => $this->apiModels->allClubs()]);
    }

    public function generate()
    {
        return view("public/promo/sixpack-challenge/generate");
    }
    
    public function updateKode(Request $request)
    {
        $sc4 = Sixpack4::where('email', $request->email)->first();
        if (!$sc4) {
            return redirect()->route('sixpack-challenge.daftar')->withInput()->with('alert', 'Email anda belum terdaftar di sixpack challenge kami');
        }
        $clubs_kode = $this->apiModels->allClubs($sc4->club_id);
        $request->validate([
            'email' => 'required|email',
        ]);
        Sixpack4::where('email', $sc4->email)
                    ->update([
                        'kode' => 'UA-SixpackChallenge-' . date('YmdH') . '-' . $clubs_kode['codename'] . '-' . rand(100, 999)
                    ]);
        $sc4Update = Sixpack4::where('email', $request->email)->first();
        $sc4Update->url = url('sixpack-challenge/confirm?kode=') ;
        $clubs = $this->apiModels->allClubs()['rows'];
        Mail::to( $sc4Update->email )->send(new SendEmail($sc4Update, $clubs));
        return redirect()->route('sixpack-challenge.daftar', ['kode' => $sc4Update->kode])->with('success', 'Silahkan cek Email yang kami kirim ke ')->with('email', $sc4Update->email);
    }

    public function save(Request $request)
    {
        $request->validate(
            [
                // 'kode' => 'unique:sixpack_challenge,kode',
                'club_id' => 'required',
                'nama' => 'required',
                'nomor' => ['required', 'numeric'],
                'email' => 'required|email|unique:sixpack_challenge,email'
            ],
            [
                'kode.unique' => 'Terjadi kesalah, coba reload halaman lagi',
                'club_id.required' => 'Pilih Club!',
                // 'nomor.numeric' => 'Harus diisi dengan angka!'
            ]
        );
        $clubs_kode = $this->apiModels->allClubs($request->club_id);
        $request['kode'] = 'UA-SixpackChallenge-' . date('YmdH') . '-' . $clubs_kode['codename'] . '-' . rand(100, 999);
        $datareq = $request->all();
        $datareq += array(
            // 'kode' => '123',
            'harga' => '488000',
            'status' => '0'
        );
        $sc4 = Sixpack4::create($datareq);
        $sc4->url = url('sixpack-challenge/confirm?kode=') ;

        $clubs = $this->apiModels->allClubs()['rows'];
        Mail::to( $sc4->email )->send(new SendEmail($sc4, $clubs));
        return redirect()->route('sixpack-challenge.send', ['kode' => $sc4->kode])->with('success', 'Silahkan cek Email yang kami kirim ke ')->with('email', $sc4->email);
    }

    public function send($kode)
    {
        $dataInvoice = Sixpack4::where('kode', $kode)->first();
        return view("public/promo/sixpack-challenge/send", compact('dataInvoice'));
    }

    public function confirm(Request $request)
    {
        // dd($request);
        $promoName = 'Membership Sixpack Challenge';
        $dataReq = Sixpack4::where('kode', $request->kode)->first();
        if (!$dataReq) {
            return view("public/member/daftar/order/notData");
        }
        
        $midtrans = new ApiMidtrans();
        $midtrans->midtransConfig();

        // $order = \Midtrans\Transaction::status($kode);
        $order = $midtrans->getStatusOrder($dataReq->kode);
        if ($order['status_code'] != 404) {
            // dd($order);
            return redirect()->route('order.status', ['id' => $order['order_id']]);
        }
        $params = array(
            'transaction_details' => array(
                'order_id' => $dataReq->kode,
                'gross_amount' => '',
            ),
            'item_details' => array([
                'id' => $dataReq->id,
                'price' => $dataReq->harga,
                'quantity' => 1,
                'name' => $promoName,
            ]),
            'customer_details' => array(
                'first_name' => $dataReq->nama,
                'last_name' => '',
                'email' => $dataReq->email,
                'phone' => $dataReq->nomor,
            ),
        );
        // dd($params);
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view("public/promo/sixpack-challenge/confirm", compact('params'), ['token' => $snapToken, 'dataInvoice' => $dataReq]);
    }

    public function order(Request $request)
    {
        // dd($request);
        $dataOrder = json_decode($request->data_json_bayar);
        $order = Orders::create([
            'order_name' => 'Sixpack Challenge Membership',
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
}
