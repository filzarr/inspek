<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ppid;
use App\Models\Pdfjudul;

class Ppidjudul extends Model
{
    use HasFactory;
    public function pdfjudul()
    {
        return $this->hasMany(Pdfjudul::class, 'ppidjudul_id');
    }
    public function Ppid(){
        return $this->belongsTo(Ppid::class, 'ppid_id');
}
}
