<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //評論
    public function assesses(){
        return $this->hasMany(Assess::class);
    }


}
