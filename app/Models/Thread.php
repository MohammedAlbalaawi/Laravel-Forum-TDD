<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function path(){
        return '/threads/' . $this->category->slug . '/' .$this->id;
    }

    public function replies(){
       return $this->hasMany(Reply::class);
    }

    public function creator(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function addReply($reply){
        $this->replies()->create($reply);
    }
}
