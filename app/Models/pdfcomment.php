<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Submenu;
class pdfcomment extends Model
{
    use HasFactory;
    protected $fillable = [
     
        'name',
        'email',
        'body',
        'submenu_id'
        
    ];
    public function Submenu(){
        return $this->belongsTo(Submenu::class, 'submenu_id');
}
}
