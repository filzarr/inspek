<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Navbar;
class menu extends Model
{
    use HasFactory;
    protected $fillable = [
     
        'title',
        
        
    ];
    public function navbar(){
        return $this->hasMany(Navbar::class, 'judul_id');
    }
}
