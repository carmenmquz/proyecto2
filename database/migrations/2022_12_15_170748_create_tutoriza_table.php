<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorizaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutoriza', function (Blueprint $table) {
            $table->id();
            /*$table->string('dni-nif-tutor');
                $table->foreign('dni-nif-tutor')
                      ->references('dni-nif')->on('users')
                      ->onDelete('cascade');
            $table->bigInteger('idMenor')->unsigned();
                $table->foreign('idMenor')
                      ->references('id')->on('menor')
                      ->onDelete('cascade');*/
            $table->timestamps();

            /*$table->primary(array('dni-nif-tutor','idMenor'));*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutoriza');
    }
}
