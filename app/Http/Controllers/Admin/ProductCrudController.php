<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use App\Models\Tags;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CloneOperation { clone as traitClone; }

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Product::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/product');
        CRUD::setEntityNameStrings('Sản phẩm','Các sản phẩm');
        $this->crud->addButtonFromModelFunction('line','Xem trên web','viewOnWeb');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name')->label('Tên');
        CRUD::column('price')->label('Giá');
        CRUD::column('old_price')->label('Giá cũ');
        CRUD::column('quantity')->label('Hàng còn trong kho');
        CRUD::column('cover_image')->label('Ảnh sản phẩm')->type('image');
        $this->crud->addColumn([
            'name'=>'category_id',
            'type'=>'select',
            'label'=>'Danh mục',
            'entity'=>'category',
            'model'=>'App\Models\Category'
        ]);
        $this->crud->addColumn([
            'name'=>'brand_id',
            'type'=>'select',
            'label'=>'Thương hiệu',
            'entity'=>'brand',
            'model'=>'App\Models\Brand'
        ]);
        $this->crud->addColumn([
            'name'=>'user_id',
            'type'=>'select',
            'label'=>'Người đăng',
            'entity'=>'user',
            'model'=>'App\Models\User'
        ]);
        CRUD::column('slug')->label('Url');

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
        CRUD::setValidation(ProductRequest::class);
        CRUD::field('name')->label('Tên sản phẩm');
        CRUD::field('price')->label('Giá')->type('number');
        CRUD::field('old_price')->label('Giá cũ')->type('number');
        CRUD::field('quantity')->label('Hàng còn trong kho')->type('number');
        CRUD::field('cover_image')->label('Ảnh sản phẩm')->type('image');
        CRUD::field('describe')->label('Mô tả')->type('ckeditor');
        CRUD::field('specifications')->label('Thông số kỹ thuật')->type('ckeditor');
        CRUD::field('details')->label('Thông tin bổ sung')->type('ckeditor');
        CRUD::field('rate')->type('select_from_array')->options([1,2,3,4,5]);
        $this->crud->addField([
            'name'=>'category_id',
            'type'=>'select2',
            'label'=>'Danh mục',
            'entity'=>'category',
            'model'=>'App\Models\Category'
        ]);
        $this->crud->addField([
            'name'=>'brand_id',
            'type'=>'select2',
            'label'=>'Thương hiệu',
            'entity'=>'brand',
            'model'=>'App\Models\Brand'
        ]);
        $this->crud->addField([
            'name'=>'brand_id',
            'type'=>'select2',
            'label'=>'Thương hiệu',
            'entity'=>'brand',
            'model'=>'App\Models\Brand'
        ]);
        $this->crud->addField([
            // any type of relationship
            'name'         => 'tags', // name of relationship method in the model
            'type'         => 'relationship',
            'label'        => 'Nhãn', // Table column heading
            // OPTIONAL
            'entity'    => 'tags', // the method that defines the relationship in your Model
            'attribute' => 'name',
            'model'     => Tags::class, // foreign key model
        ]);
        CRUD::field('user_id')->type('hidden')->default(backpack_user()->id);
        CRUD::field('slug')->type('hidden');

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
    public function clone($id)
    {
        $this->crud->hasAccessOrFail('clone');
        $this->crud->setOperation('clone');

        // whatever you want

        // if you still want to call the old clone method
        $this->traitClone($id);
    }
}
