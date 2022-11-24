<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ppidjudul;
class Pdfjudul extends Model
{
    use HasFactory;
    public function Ppidjudul(){
        return $this->belongsTo(Ppidjudul::class, 'ppidjudul_id');
}
}
