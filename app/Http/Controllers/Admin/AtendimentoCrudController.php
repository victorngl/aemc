<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AtendimentoRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class AtendimentoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AtendimentoCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Atendimentos::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/atendimento');
        CRUD::setEntityNameStrings('atendimento', 'atendimentos');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('anoletivo');
        CRUD::column('conselhodeclasse');
        CRUD::column('created_at');
        CRUD::column('id');
        CRUD::column('ocorrencia');
        CRUD::column('orientacao');
        CRUD::column('paciente_id');
        CRUD::column('tipoatendimento_id');
        CRUD::column('turma_id');
        CRUD::column('updated_at');
        CRUD::column('user_id');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(AtendimentoRequest::class);

        CRUD::field('anoletivo');
        CRUD::field('conselhodeclasse');
        CRUD::field('created_at');
        CRUD::field('id');
        CRUD::field('ocorrencia');
        CRUD::field('orientacao');
        CRUD::field('paciente_id');
        CRUD::field('tipoatendimento_id');
        CRUD::field('turma_id');
        CRUD::field('updated_at');
        CRUD::field('user_id');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
