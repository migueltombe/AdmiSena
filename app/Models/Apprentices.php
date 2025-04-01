<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentices extends Model
{
    use HasFactory;

   public function Course(){
return $this-> belongsTo('App\Models\Courses');

   } 

 public function Cumputer(){
return $this->belongsTo('App\Models\Cumputers');

   }  


}
