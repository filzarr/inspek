<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formpermohonan extends Model
{
    use HasFactory;
    protected $fillable = [
     
        'nama',
        'email',
        'kategori',
        'nomorhandphone',
        'body',
       
       
        
    ];
}
