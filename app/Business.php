<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    //評論
    public function assesses(){
        return $this->hasMany(Assess::class);
    }
    /*
    //查閱
  public function members(){
      return $this->belongsTo(Member::class);
  }
   */
}
