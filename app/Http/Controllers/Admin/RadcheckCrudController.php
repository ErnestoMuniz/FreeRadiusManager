<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RadcheckRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class RadcheckCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class RadcheckCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Radcheck::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/radcheck');
        CRUD::setEntityNameStrings('radcheck', 'radchecks');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // CRUD::setFromDb(); // columns
        $this->crud->addColumns([
          [
            'name' => 'username'
          ],[
            'name' => 'attribute'
          ],[
            'name' => 'op'
          ],[
            'name' => 'value',
            'type' => 'password'
          ]
        ]);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    protected function setupShowOperation()
    {
        $this->setupListOperation();
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(RadcheckRequest::class);

        // CRUD::setFromDb(); // fields
        $this->crud->addFields([
          [
            'name' => 'username'
          ],[
            'name' => 'attribute',
            'type' => 'select2_from_array',
            'options' => [
              'Cleartext-Password' => 'Cleartext-Password',
              'Crypt-Password' => 'Crypt-Password',
              'LM-Password' => 'LM-Password',
              'MD5-Password' => 'MD5-Password',
              'NT-Password' => 'NT-Password',
              'SHA-Password' => 'SHA-Password',
              'SMD5-Password' => 'SMD5-Password',
              'SSHA-Password' => 'SSHA-Password'
            ]
          ],[
            'name' => 'op',
            'label' => 'Operation',
            'type' => 'select2_from_array',
            'options' => [
              ':=' => ':=',
              '=' => '=',
              '==' => '==',
              '+=' => '+=',
              '!=' => '!=',
              '>' => '>',
              '>=' => '>=',
              '<' => '<',
              '<=' => '<=',
              '=~' => '=~',
              '!~' => '!~',
              '=*' => '=*',
              '!*' => '!*'
            ]
          ],[
            'name' => 'value'
          ]
        ]);

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
