<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRehabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rehabs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('names')->nullable();
            $table->string('mother_phone')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('guardian_phone')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('cause')->nullable();
            $table->string('level_of_drugs')->nullable();
            $table->string('other_diseases')->nullable();
            $table->integer('districts_id')->unsigned();
            $table->integer('sectors_id')->unsigned();
            $table->integer('villages_id')->unsigned();
            $table->integer('cells_id')->unsigned();
            $table->date('entry_time')->nullable();
            $table->date('release_time')->nullable();
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
        Schema::dropIfExists('rehabs');
    }
}
