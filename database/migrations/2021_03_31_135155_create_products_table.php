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
            $table->string('product_name');
            $table->integer('price');
            $table->integer('old_price');
            $table->integer('quantity');
            $table->longText('cover_image');
            $table->longText('logo');
            $table->longText('content');
            $table->smallInteger('rate');
            $table->foreignId('brands_id')->constrained('brands');
            $table->foreignId('categories_id')->constrained('categories');
            $table->foreignId('users_id')->constrained('users');
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
