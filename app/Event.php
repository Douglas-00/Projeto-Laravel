<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    

    protected $casts = ['itens' =>'array'];

    protected $dates = ['date'];
}
