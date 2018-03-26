<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Brand');
            $table->string('Model');
            $table->integer('Storage');
            $table->string('Warranty');
            $table->string('Color');
            $table->integer('Year');
            $table->integer('Price');
            $table->string('Picture1')->nullable();
            $table->string('Picture2')->nullable();
            $table->string('Picture3')->nullable();
            $table->string('Picture4')->nullable();
            $table->string('Picture5')->nullable();
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
        Schema::dropIfExists('phones');
    }
}
