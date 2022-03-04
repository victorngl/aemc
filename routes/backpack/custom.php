<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::get('autorizacaodesaida', 'AutorizacaoDeSaida@dashboard')->name('backpack.autorizacaodesaida');
    Route::post('autorizacaodesaida', 'AutorizacaoDeSaida@tratararquivo')->name('backpack.tratararquivo');
    Route::crud('alunos', 'AlunosCrudController');
    Route::crud('autorizados', 'AutorizadosCrudController');
    Route::crud('turma', 'TurmaCrudController');
    Route::get('autorizados/{id}','AutorizadosController@index');
    Route::crud('funcionario', 'FuncionarioCrudController');
    Route::crud('user', 'UserCrudController');
}); // this should be the absolute last line of this file