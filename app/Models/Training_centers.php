<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training_centers extends Model
{
    use HasFactory;

public function Training_centers(){

     return $this->belongsTo('App\Models\Training_centers');
    }
public function Courses(){
     return $this->hasMany('App\Models\Courses');
    }

    
}
