<?php

namespace App\Imports;

use App\Models\Autorizados;
use App\Models\Alunos;
use App\Models\Turma;

use Illuminate\Database\Eloquent\Model;
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

        if ($row['1 - Nome - Autorizado 1'] != null) {
            if (Autorizados::where('nome', 'like', $row['1 - Nome - Autorizado 1'])->get()->first() == null &&
                Autorizados::where('naluno', '=', $row['RA do Aluno'])->get()->first() == null) {
                $autorizado = new Autorizados([
                    'naluno' => $row['RA do Aluno'],
                    'nome' => $row['1 - Nome - Autorizado 1'],
                    'parentesco' => $row['3 - Parentesco - Autorizado 1'],
                    'cpf' => $row['2 - CPF - Autorizado 1'],
                    'telefone' => $row['4 - Telefone - Autorizado 1'],
                    'criadonosistema' => false,
                ]);

                array_push($retorno, $autorizado);
            }

        if ($row['5 - Nome - Autorizado 2'] != null) {
            if (Autorizados::where('nome', 'like', $row['5 - Nome - Autorizado 2'])->get()->first() == null &&
                Autorizados::where('naluno', '=', $row['RA do Aluno'])->get()->first() == null) {
                $autorizado2 = new Autorizados([
                    'naluno' => $row['RA do Aluno'],
                    'nome' => $row['5 - Nome - Autorizado 2'],
                    'parentesco' => $row['7 - Parentesco - Autorizado 2'],
                    'cpf' => $row['6 - CPF - Autorizado 2'],
                    'telefone' => $row['8 - Telefone - Autorizado 2'],
                    'criadonosistema' => false,
                ]);
                array_push($retorno, $autorizado2);
            }


        }

        if ($row['9 - Nome - Autorizado 3'] != null) {
            if (Autorizados::where('nome', 'like', $row['9 - Nome - Autorizado 3'])->get()->first() == null &&
                Autorizados::where('naluno', '=', $row['RA do Aluno'])->get()->first() == null) {
                $autorizado3 = new Autorizados([
                    'naluno' => $row['RA do Aluno'],
                    'nome' => $row['9 - Nome - Autorizado 3'],
                    'parentesco' => $row['11 - Parentesco - Autorizado 3'],
                    'cpf' => $row['10 - CPF - Autorizado 3'],
                    'telefone' => $row['12 - Telefone - Autorizado 3'],
                    'criadonosistema' => false,
                ]);

                array_push($retorno, $autorizado3);
            }

        }

        if ($row['13 - Nome - Autorizado 4'] != null) {
            if (Autorizados::where('nome', 'like', $row['13 - Nome - Autorizado 4'])->get()->first() == null &&
                Autorizados::where('naluno', '=', $row['RA do Aluno'])->get()->first() == null) {
                $autorizado4 = new Autorizados([
                    'naluno' => $row['RA do Aluno'],
                    'nome' => $row['13 - Nome - Autorizado 4'],
                    'parentesco' => $row['15 - Parentesco - Autorizado 4'],
                    'cpf' => $row['14 - CPF - Autorizado 4'],
                    'telefone' => $row['16 - Telefone - Autorizado 4'],
                    'criadonosistema' => false,

                ]);
                array_push($retorno, $autorizado4);
            }

        }
            if (Alunos::find($row['RA do Aluno']) == null) {
                $turma = Turma::where('name', $row['Turma'])->get('id')->first();

                $aluno = new Alunos([
                    'naluno' => $row['RA do Aluno'],
                    'nome' => $row['Aluno'],
                    'id_turma' => $turma['id'],
                ]);

                array_push($retorno, $aluno);
            }

        return $retorno;
    }
    }
}
