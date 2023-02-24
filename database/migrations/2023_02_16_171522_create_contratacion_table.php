<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratacion', function (Blueprint $table) {
            $table->unsignedBigInteger('cuidador_id');
            $table->unsignedBigInteger('menor_id');
            $table->timestamps();
            $table->foreign('cuidador_id')->references('id')->on('cuidadores');
            $table->foreign('menor_id')->references('id')->on('menores');
            $table->primary(['cuidador_id', 'menor_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratacion');
    }
}
