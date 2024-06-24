<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sixpack4 extends Model
{
    use HasFactory;
    public $table = "sixpack_challenge";
    protected $fillable = ['nama', 'nomor', 'email', 'alamat', 'kode', 'club_id', 'harga', 'tanggal', 'status', 'image'];

    public function getIndex($search = null)
    {
        $data = Sixpack4::where('nama', 'like', '%'.$search.'%')
                                ->orwhere('sixpack_challenge.email', 'like', '%'.$search.'%')
                                ->orwhere('order_id', 'like', '%'.$search.'%')
                                ->join('orders', 'sixpack_challenge.kode', 'orders.order_id')
                                ->orderBy('sixpack_challenge.id', 'DESC');
        return $data;
    }
}
