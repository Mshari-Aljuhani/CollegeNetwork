<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable =[
        'message',
        'pic'
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function images(){
        return $this->hasMany(Image::class, 'post_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class,'post_id');
    }

    public function first_image(){
        return $this->images->first()->imageName;
    }
}
