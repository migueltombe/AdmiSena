<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

public function Teachers(){
  return $this->hasMany('App\Models\Area');

}
public function Courses(){
  return $this->hasMany('App\Models\Courses');



}


}