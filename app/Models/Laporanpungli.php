<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporanpungli extends Model
{
    use HasFactory;
    protected $fillable = [
     
        'nama' ,
            'email' ,
            'alamat' ,
            'nomorhanphone' ,
            'aduan' ,
       
       
        
    ];
}