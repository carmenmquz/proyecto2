<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('tutor');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('tutor', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('dninie')->unique();
                //$table->foreign('dninie')
                      //->references('dninie')->on('users')
                      //->onDelete('cascade');
            $table->smallInteger('edad');
            $table->timestamps();
        });

    }
}
