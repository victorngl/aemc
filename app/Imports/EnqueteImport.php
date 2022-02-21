<?php

namespace App\Imports;

use App\Models\Autorizados;
use App\Models\Alunos;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\HasReferencesToOtherSheets;

HeadingRowFormatter::default('none');

class EnqueteImport implements ToModel, WithHeadingRow, HasReferencesToOtherSheets
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */


    public function model(array $row)
    {
        $retorno = array();

        if($row['1 - Nome - Autorizado 1'] != null && $row['3 - Parentesco - Autorizado 1'] != null && $row['2 - CPF - Autorizado 1'] != null && $row['4 - Telefone - Autorizado 1'] != null) {
            $autorizado = new Autorizados([
                'naluno' => $row['RA do Aluno'],
                'nome' => $row['1 - Nome - Autorizado 1'],
                'parentesco' => $row['3 - Parentesco - Autorizado 1'],
                'cpf' => $row['2 - CPF - Autorizado 1'],
                'telefone' => $row['4 - Telefone - Autorizado 1'],
            ]);
            array_push($retorno, $autorizado);

            if($row['5 - Nome - Autorizado 2'] != null && $row['7 - Parentesco - Autorizado 2'] != null && $row['6 - CPF - Autorizado 2'] != null && $row['8 - Telefone - Autorizado 2'] != null) {
                $autorizado2 = new Autorizados([
                    'naluno' => $row['RA do Aluno'],
                    'nome' => $row['5 - Nome - Autorizado 2'],
                    'parentesco' => $row['7 - Parentesco - Autorizado 2'],
                    'cpf' => $row['6 - CPF - Autorizado 2'],
                    'telefone' => $row['8 - Telefone - Autorizado 2'],
                ]);
                array_push($retorno, $autorizado2);
            }

            if($row['9 - Nome - Autorizado 3'] != null && $row['11 - Parentesco - Autorizado 3'] != null && $row['10 - CPF - Autorizado 3'] != null && $row['12 - Telefone - Autorizado 3'] != null) {
                $autorizado3 = new Autorizados([
                    'naluno' => $row['RA do Aluno'],
                    'nome' => $row['9 - Nome - Autorizado 3'],
                    'parentesco' => $row['11 - Parentesco - Autorizado 3'],
                    'cpf' => $row['10 - CPF - Autorizado 3'],
                    'telefone' => $row['12 - Telefone - Autorizado 3'],
                ]);
                array_push($retorno, $autorizado3);
            }

            if($row['13 - Nome - Autorizado 4'] != null && $row['15 - Parentesco - Autorizado 4'] != null && $row['14 - CPF - Autorizado 4'] != null && $row['16 - Telefone - Autorizado 4'] != null) {
                $autorizado4 = new Autorizados([
                    'naluno' => $row['RA do Aluno'],
                    'nome' => $row['13 - Nome - Autorizado 4'],
                    'parentesco' => $row['15 - Parentesco - Autorizado 4'],
                    'cpf' => $row['14 - CPF - Autorizado 4'],
                    'telefone' => $row['16 - Telefone - Autorizado 4'],

                ]);
                array_push($retorno, $autorizado4);
            }

            $aluno = new Alunos([
                'naluno' => $row['RA do Aluno'],
                'nome' => $row['Aluno'],
                'turma' => $row['Turma'],
            ]);
            array_push($retorno, $aluno);

            return $retorno;


        }


    }

}
