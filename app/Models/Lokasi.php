<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    protected $table = 'lokasi';
    protected $fillable = [
        'lokasi_link',
        'wilayah',
        'nomor_instansi',
        'email_instansi',
        'yt_link',
        'ig_link',
        'fb_link',
        'x_link',
    ];
}
