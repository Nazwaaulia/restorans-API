<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Restoran extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nama',
        'pesanan',
        'level',
        'jumlah',
        'tanggal-pembelian',
    ];
    // public $timestamps = false;
}
