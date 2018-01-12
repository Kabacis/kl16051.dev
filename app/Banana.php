<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banana extends Model
{
    public function biedrs(){
        return $this->hasMany(Biedrs::class);
    }
    public function vaditajs(){
        return $this->hasOne(Vaditajs::class);
    }
}
