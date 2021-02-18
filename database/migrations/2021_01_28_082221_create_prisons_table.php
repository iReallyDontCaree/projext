<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prisons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prison_id')->nullable();
            $table->string('names')->nullable();
            $table->string('idnum')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_phone')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('guardian_phone')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('cause')->nullable();
            $table->integer('districts_id')->unsigned();
            $table->integer('sectors_id')->unsigned();
            $table->integer('villages_id')->unsigned();
            $table->integer('cells_id')->unsigned();
            $table->date('entry_time')->nullable();
            $table->date('release_time')->nullable();
            $table->string('imate_status')->nullable();
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
        Schema::dropIfExists('prisons');
    }
}
