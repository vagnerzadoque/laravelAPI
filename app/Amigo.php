<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Amigo extends Model
{
    //
    protected $fillable = ['nome', 'email', 'celular','codigo'];
}
