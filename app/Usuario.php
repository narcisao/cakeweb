<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //protected $table = 'usuarios';
    public $timestamps = false;

    protected $fillable = ['
    email,
    nome,
    usuario,
    senha,
    senhac
    '];
}