<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visimisi extends Model
{
    use HasFactory;
    protected $table = 'visimisi';
    public $visimisi = 'visimisi';
    protected $fillable = [
        'visi',
        'misi',
    ];
}
