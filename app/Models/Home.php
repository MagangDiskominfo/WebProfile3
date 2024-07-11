<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    
    protected $table = 'home';
    public $home = 'home';
    protected $fillable = [
        'logo',
        'nama_instansi',
        'background_image',        
    ];
}
