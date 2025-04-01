<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = ['title', 'description', 'image' , 'time' , 'desc1' , 'desc2' , 'desc3'];
}
