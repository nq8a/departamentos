<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name1');
            $table->string('name2')->nullable();
            $table->string('lastname1');
            $table->string('lastname2')->nullable();
            $table->string('email')->unique();
            $table->integer('status')->unsigned();
            $table->integer('depa')->unsigned();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('depa')->references('id')->on('departaments');
            $table->foreign('status')->references('id')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
