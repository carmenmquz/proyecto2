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
        Schema::dropIfExists('tutoriza');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('tutoriza', function (Blueprint $table) {
            $table->id();
            /*$table->string('dninietutor');
                $table->foreign('dninietutor')
                      ->references('dninie')->on('users')
                      ->onDelete('cascade');
            $table->bigInteger('idMenor')->unsigned();
                $table->foreign('idMenor')
                      ->references('id')->on('menor')
                      ->onDelete('cascade');*/
            $table->timestamps();

            /*$table->primary(array('dninietutor','idMenor'));*/
        });

    }
}
