<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 use App\Models\Navbar;
class Submenu extends Model
{
    use HasFactory;
    protected $fillable = [
     
        'submenu',
        'file',
        'navbar_id'
        
        
    ];
   
    public function Navbar()
    {
        return $this->belongsTo(Navbar::class, 'navbar_id');
    }
}
