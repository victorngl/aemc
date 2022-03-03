<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AlunosRequest;
use App\Models\Alunos;
use App\Models\Turma;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class AlunosCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AlunosCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Alunos::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/alunos');
        CRUD::setEntityNameStrings('alunos', 'alunos');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::column('created_at');
        //CRUD::column('id');
        $this->crud->addColumn([
            'name' => 'naluno',
            'label' => 'Número do Aluno',
            'type' => 'number',
        ]);
        CRUD::column('nome');
        $this->crud->addColumn([
            'label'     => 'Turma', // Table column heading
            'type'      => 'select',
            'name'      => 'id_turma', // the column that contains the ID of that connected entity;
            'entity'    => 'turma', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "App\Models\Turma", // foreign key model
        ]);

        CRUD::column('almoco');
        CRUD::column('saidasozinho');
        CRUD::column('saidasozinhocontraturno');
        CRUD::enableExportButtons();
        //CRUD::column('updated_at');

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
        CRUD::setValidation(AlunosRequest::class);

        //CRUD::field('created_at');
        //CRUD::field('id');
        CRUD::field('naluno');
        CRUD::field('nome');
        //CRUD::field('turma');

        $this->crud->addField([
            'name' => 'id_turma',
            'label' => 'Turma',
            'type' => 'select',
            'entity' => 'turma',
            'attribute' => 'name',
            'model' => Turma::class,
        ]);

        CRUD::field('almoco');
        CRUD::field('saidasozinho');
        CRUD::field('saidasozinhocontraturno');
       // CRUD::field('updated_at');

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
