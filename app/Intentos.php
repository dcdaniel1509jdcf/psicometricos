<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intentos extends Model
{
    //

    public $table = "intentos_psicometricos";
    protected $fillable = [
        'usuario_id', 'is_active',"tipo_test"
    ];
}
