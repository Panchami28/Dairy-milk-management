<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
     protected $table='sales';

   protected $fillable=['date','uname','userid','qty','address','milk','rate'];

   protected $Primarykey='id';
}
