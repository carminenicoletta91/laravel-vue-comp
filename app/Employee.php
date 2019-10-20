<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=[
      "firstname",
      "lastname",
      "date_of_birth",
      "salary"
    ];
    public function posts(){
      return $this -> hasmany(Post::class);
    }
}
