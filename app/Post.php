<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
      "title",
      "content",
      "likes"
    ];
    public function employee(){
      return $this -> belongsTo(Employee::class);
    }
    public function comments(){
      return $this -> hasmany(Comment::Class);
    }
}
