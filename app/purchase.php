<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    protected $table='purchase';

   protected $fillable=['date','uname','userid','qty','address','milk'];

   protected $Primarykey='id';
}
