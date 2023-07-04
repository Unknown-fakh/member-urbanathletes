<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use App\Models\Lead;

class SpecialDealController extends Controller
{

    public function index()
    {
        $club = DB::connection('mysql2')->table('ua_mst_clubs')->whereRaw('org_id = 12')->whereRaw('deletedAt is null')->get();

        return view('public.promo.special-deal.index', compact('club'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255', 'phone' => 'required|max:255|unique:mysql2.ua_mst_leads,phone,NULL,id,org_id,' . env('ORG_ID'),
            'email' => 'required|max:255|unique:mysql2.ua_mst_leads,email,NULL,id,org_id,' . env('ORG_ID'),
            'club_id' => 'required',
            'checkbox' => 'accepted', 'time_call' => 'required'
        ], [
            'time_call.required' => 'Waktu dihubungi harus dipilih.'
        ]);

        $validateData['org_id'] = env('ORG_ID');
        if (isset($_GET['source'])) {
            $validateData['source'] = $_GET['source'];
        } else {
            $validateData['source'] = 'website';
        }
        if (isset($_GET['type'])) {
            $validateData['type_promo'] = $_GET['type'];
        } else {
            $validateData['type_promo'] = 'special deal';
        }
        $validateData['createdAt'] = date('Y-m-d H:i:s');
        $validateData['updatedAt'] = date('Y-m-d H:i:s');

        $modelLead = Lead::create($validateData);

        return back()->with('success', 'Register Successfully.');
    }
}
