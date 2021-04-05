<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    public static function complete()
    {

        return static::where('complete', 1)->get();

    }
}
