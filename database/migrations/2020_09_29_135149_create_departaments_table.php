<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departaments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('status')->unsigned();
            $table->timestamps();
            
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
        Schema::dropIfExists('departaments');
    }
}
