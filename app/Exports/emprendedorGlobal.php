<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class emprendedorGlobal implements FromCollection,WithHeadings
{
    public $data;

    public function __construct($data)
    {
        //
        $this->data=$data['data'];
    }
    public function headings():array{
        return [
            'Valor SH','Respuestas SH','Valor SS','Respuestas SS','Valor SR','Respuestas SR','Estudiante','Colegio'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect($this->data);
    }
}
