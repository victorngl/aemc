<?php

namespace App\Http\Controllers\Admin;

use App\Imports\EnqueteImport;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Alunos;
use App\Models\Autorizados;
use App\Models\Turma;


class AutorizacaoDeSaida extends Controller
{
    protected $data = []; // the information we send to the view

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware(backpack_middleware());
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $turmas = Turma::all();

        $this->data['$turma_array'] = 'Autorização de Saída'; // set the page title
        $this->data['breadcrumbs'] = [
            trans('backpack::crud.admin')     => backpack_url('autorizacaodesaida'),
            trans('backpack::base.dashboard') => false,
        ];
        $this->data['turmas'] = $turmas;

        return view(backpack_view('autorizacaodesaida'), $this->data);
    }

    public function tratararquivo(Request $request)
    {
        $path = $request->enquetefile->storeAs('enquete', 'enquete.xlsx');

        //$deleted = Autorizados::where('criadonosistema', false)->delete();

        Autorizados::truncate();
        Alunos::truncate();

        Excel::import(new EnqueteImport(), $path);

        $turmas = Turma::all();

        $this->data['turmas'] = $turmas;

        return view(backpack_view('autorizacaodesaida'), $this->data);
    }
}
