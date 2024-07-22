<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    protected $table = 'kegiatan';
    public $kegiatan = 'kegiatan';
    protected $fillable = [
        'judul_kegiatan',
        'deskripsi_kegiatan',
        'gambar_kegiatan',
    ];
}
