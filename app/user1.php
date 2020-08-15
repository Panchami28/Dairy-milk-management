<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user1 extends Model
{
    protected $table='user1';

   protected $fillable=['fname','lname','userid','address','email','password'];

   protected $Primarykey='id';
}
