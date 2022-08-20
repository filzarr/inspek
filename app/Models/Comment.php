<?php

namespace App\Models;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function Post(){
        
        
            return $this->belongsTo(Post::class, 'post_id');
        
    }
    
}
