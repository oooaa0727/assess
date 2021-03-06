<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assess extends Model
{
    //會員
    public function members(){
        return $this->belongsTo(Member::class);
    }
    //店家
    public function businesses(){
        return $this->belongsTo(Business::class);
    }
}
