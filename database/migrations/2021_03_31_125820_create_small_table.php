<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmallTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('small', function (Blueprint $table) {
            $table->bigIncrements('id'); // by default the primary key is set to unsigned big integer
            $table->unsignedBigInteger('user_id'); //associate the address with a user
            $table->text('address');
            $table->string('city');
            $table->string('country');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('test')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('small');
    }
}
