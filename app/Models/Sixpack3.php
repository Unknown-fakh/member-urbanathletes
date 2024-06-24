<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sixpack3 extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'nomor', 'email', 'alamat', 'kode', 'club_id', 'harga', 'tanggal', 'status', 'image'];
}
