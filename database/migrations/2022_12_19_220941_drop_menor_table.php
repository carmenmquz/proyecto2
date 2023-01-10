<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('menor');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('menor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->smallInteger('edad');
            $table->text('particularidades');
            $table->timestamps();
        });

    }
}
