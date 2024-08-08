<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $table = 'footer';
    protected $fillable = [
        'wilayah',
        'nomor_instansi',
        'email_instansi',
    ];
}
