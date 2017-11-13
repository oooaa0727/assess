<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //評論
    public function assesses(){
        return $this->hasMany(Assess::class);
    }

    /*
      //店家
    public function businesses(){
        return $this->hasMany(Business::class);
    }
     */

}
