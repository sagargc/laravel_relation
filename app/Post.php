<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $guarded = []; // mass assign disable.



     public function  user()
     {
         return $this->belnogsTo(\App\User::class);
     }
}
