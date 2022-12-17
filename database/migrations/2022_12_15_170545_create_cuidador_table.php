<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuidadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuidador', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('dninie')->unique();
                //$table->foreign('dninie')
                      //->references('dninie')->on('users')
                      //->onDelete('cascade');
            $table->string('especialidad')->nullable();
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
        Schema::dropIfExists('cuidador');
    }
}
