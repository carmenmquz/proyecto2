<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tutor_id');
            $table->foreign('tutor_id')->references('id')->on('tutors');
            $table->unsignedBigInteger('cuidador_id');
            $table->foreign('cuidador_id')->references('id')->on('cuidadors');
            $table->unsignedBigInteger('menor_id');
            $table->foreign('menor_id')->references('id')->on('menors');
            $table->dateTime('fechainicio');
            $table->dateTime('fechafin');
            $table->float('pago', 4, 2);
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
        Schema::dropIfExists('contratacions');
    }
}
