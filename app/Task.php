<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function notFirst(){

        return static::where ('user_id', '>', 1)->get();
    }
}
