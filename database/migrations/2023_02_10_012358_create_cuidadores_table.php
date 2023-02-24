<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuidadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuidadores', function (Blueprint $table) {
           $table->id();
           $table->string('name')->default('Antonio');
           $table->string('direccion')->default('calle de la Alegria');
           $table->integer('edad')->default(18);
           $table->string('telefono')->nullable();
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
        Schema::dropIfExists('cuidadores');
    }
}
