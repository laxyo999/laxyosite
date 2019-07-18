<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = ['fullname','email','number','address','textarea','filepath'];
}
