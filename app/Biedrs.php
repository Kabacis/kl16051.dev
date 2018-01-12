<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biedrs extends Model
{
    public function banana(){

        return $this->belongsTo(Banana::class);
    }
}
