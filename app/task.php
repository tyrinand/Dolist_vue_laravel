<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $fillable = ['name','success'];
    protected $hidden = ['created_at','updated_at'];
}
