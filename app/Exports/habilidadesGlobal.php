<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class habilidadesGlobal implements FromCollection,WithHeadings

{
    public $data;

    public function __construct($data)
    {
        //
        $this->data=$data['data'];
    }
    public function headings():array{
        return [
            'Estudiante',
            'Perfil',
            'Valor Perfil',
            'Desición',
            'Valor Desición',
            'Riesgo',
            'Valor Riesgo',

            'Equipo',
            'Valor Equipo',

            'Persistencia',
            'Valor Persistencia',
            'Liderazgo',
            'Valor Liderazgo',
            'Emocional',
            'Valor Emocional',

            'Comunicación',
            'Valor Comunicación',
            'Compromiso',
            'Valor Compromiso',

        ];
    }
    public function collection()
    {
        //

        return collect($this->data);

    }
}
