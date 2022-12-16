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
            $table->string('dni-nif-tutor');
                $table->foreign('dni-nif-tutor')
                      ->references('dni-nif')->on('users')
                      ->onDelete('cascade');
            /*$table->string('dni-nif-cuidador');
                $table->foreign('dni-nif-cuidador')
                      ->references('dni-nif')->on('users')
                      ->onDelete('cascade');
            $table->bigInteger('idMenor')->unsigned();
                $table->foreign('idMenor')
                      ->references('id')->on('menor')
                      ->onDelete('cascade');*/

            $table->smallInteger('dia');
            $table->string('mes');
            $table->year('anyo');
            $table->string('hora-inicio');
            $table->string('hora-fin');
            $table->timestamps();

            $table->primary(array('dni-nif-tutor','dia','mes','anyo'));
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
