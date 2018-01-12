<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaditajs extends Model
{
    public function banana(){

        return $this->belongsTo(Banana::class);
    }
}
