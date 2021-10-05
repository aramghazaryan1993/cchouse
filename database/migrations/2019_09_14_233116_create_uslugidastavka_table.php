<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUslugidastavkaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uslugidastavka', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('text');
            $table->string('remont1');
            $table->string('remont2');
            $table->string('remont3');
            $table->string('remont4');
            $table->string('remont5');
            $table->string('remont6');
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
        Schema::dropIfExists('uslugidastavka');
    }
}
