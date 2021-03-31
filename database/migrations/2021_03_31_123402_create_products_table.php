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
            $table->integer('prices');
            $table->integer('old_prices');
            $table->integer('quantity');
            $table->longText('cover_image');
            $table->longText('logo');
            $table->longText('description');
            $table->smallInteger('rate');

            $table->unsignedInteger('bands_id');
            $table->foreign('bands_id')->references('id')->on('bands');

            $table->unsignedInteger('categories_id');
            $table->foreign('categories_id')->references('id')->on('categories');

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
