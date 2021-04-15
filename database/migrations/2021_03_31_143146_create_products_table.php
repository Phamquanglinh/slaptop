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
            $table->longText('describe');
            $table->longText('specifications');
            $table->longText('details');
            $table->smallInteger('rate');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('slug');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
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
