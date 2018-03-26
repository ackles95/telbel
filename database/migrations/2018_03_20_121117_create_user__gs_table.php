<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserGsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__gs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('Surname');
            $table->string('Address');
            $table->integer('HouseNumber');
            $table->string('City');
            $table->string('Province');
            $table->integer('CAP');
            $table->string('Email')->unique();
            $table->string('G_ID');
            $table->string('Picture');
            $table->string('Password');
            $table->string('Birthday');
            $table->rememberToken();
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
        Schema::dropIfExists('user__gs');
    }
}
