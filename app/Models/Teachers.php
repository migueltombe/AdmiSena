<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;

public function Training_center(){
  return $this -> hasMany('App\Models\Teachers');  
}

public function Areas(){
  return $this -> hasMany('App\Models\Training_centers');  
}

public function Courses(){
  return $this -> hasMany('App\Models\Courses');  

}

}