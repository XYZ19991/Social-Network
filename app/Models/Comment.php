<?php

namespace App\Models;

use App\Models\Users\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function post(){
        return $this->belongsTo(Post::class);
    }
    public function text(){
        return $this->morphMany(Text::class,'textable');
    }
}
