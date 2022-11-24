<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Submenu;
use App\Models\Menu;
class Navbar extends Model
{
    use HasFactory;
    protected $fillable = [
     
        'menu',
        'judul_id',
        'body',
        'title',
        'image',
        'submenu'
        
    ];
    public function Submenu()
    {
        return $this->hasMany(Submenu::class, 'navbar_id');
    }
    public function Menu()
    {
        return $this->belongsTo(Menu::class, 'judul_id');
    }
}
