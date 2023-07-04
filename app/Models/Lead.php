<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    protected $connection = 'mysql2';
    public $timestamps = false;
    protected $table = 'ua_mst_leads';
    protected $fillable = [
        'org_id', 'club_id', 'sales_id', 'date', 'refferal_code', 'name', 'email', 'phone', 'address', 'age',
        'height', 'weight', 'gender', 'instagram', 'source', 'source_from', 'createdBy', 'createdAt', 'updatedBy',
        'updatedAt', 'deletedBy', 'deletedAt', 'type_promo', 'time_call'
    ];
}
