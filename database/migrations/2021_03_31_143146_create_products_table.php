<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->integer('old_price');
            $table->integer('quantity');
            $table->longText('cover_image');
            $table->longText('logo');
            $table->longText('content');
            $table->smallInteger('rate');
<<<<<<< HEAD:database/migrations/2021_03_31_143146_create_products_table.php
            $table->unsignedInteger('categories_id');

=======
>>>>>>> 38a0c70a8ff991969efc61bd124a2d1823da85a6:database/migrations/2021_03_31_135155_create_products_table.php
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('user_id')->references('id')->on('users');
<<<<<<< HEAD:database/migrations/2021_03_31_143146_create_products_table.php


=======
            $table->timestamps();
>>>>>>> 38a0c70a8ff991969efc61bd124a2d1823da85a6:database/migrations/2021_03_31_135155_create_products_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
