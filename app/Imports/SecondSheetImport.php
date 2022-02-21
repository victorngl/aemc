<?php

namespace App\Imports;

use App\Models\Autorizados;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\HasReferencesToOtherSheets;


class SecondSheetImport implements ToArray, WithHeadingRow, HasReferencesToOtherSheets
{
    public function array(array $row)
    {
        return new Autorizados([
            'naluno'  => 12234,
            'nome'  => 'Aluno',
            'parentesco'  => 'Aluno',
            'cpf'  => 'Aluno',
            'telefone'  => 'Aluno',
        ]);
    }
}
