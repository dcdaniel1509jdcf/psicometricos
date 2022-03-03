<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoricoHabilidades extends Model
{
    //

    protected $fillable = ['perfil',
            'desicion',
            'riesgo',
            'equipo',
            'persistencia',
            'liderazgo',
            'emocional',
            'comunicacion',
            'compromiso',

            'vperfil',
            'vdesicion',
            'vriesgo',
            'vequipo',
            'vpersistencia',
            'vliderazgo',
            'vemocional',
            'vcomunicacion',
            'vcompromiso',
            'nombre'];
}
