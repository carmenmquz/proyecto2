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
        Schema::dropIfExists('contratacion');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('contratacion', function (Blueprint $table) {
            $table->integer('idtutor');
            $table->string('dninietutor');
                //$table->foreign('dninietutor')
                      //->references('dninie')->on('users')
                      ///->onDelete('cascade');
            /*$table->string('dniniecuidador');
                $table->foreign('dniniecuidador')
                      ->references('dninie')->on('users')
                      ->onDelete('cascade');
            $table->bigInteger('idMenor')->unsigned();
                $table->foreign('idMenor')
                      ->references('id')->on('menor')
                      ->onDelete('cascade');*/

            $table->smallInteger('dia');
            $table->string('mes');
            $table->year('anyo');
            $table->string('horainicio');
            $table->string('horafin');
            $table->timestamps();
            $table->primary(array('idtutor','dia','mes','anyo'));
        });

    }
}
