<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

public function Teachers(){
return $this->hasMany('App\Models\Teachers');
    
    }

 public function Training_centers(){
return $this-> belongsTo('App\Models\Training_centers');
    
    }   
public function Areas(){
return $this-> belongsTo('App\Models\Area');
    
    }

 public function Apprentices(){
return $this-> hasMany('App\Models\Apprentices');
    
    }   


}