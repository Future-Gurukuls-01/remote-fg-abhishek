<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schoolsresponse extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function state(){
        return $this->belongsTo(States::class, 'state_id', 'id');
      }
  
  
      public function city(){
        return $this->belongsTo(Cities::class,'city_id','id');
      }
      public function school(){
        return $this->belongsTo(Schools::class,'school_id','id');
      }
}
