<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable = [
      'breed',
      'endangered',
      'continent',
      'population'
    ];
}
