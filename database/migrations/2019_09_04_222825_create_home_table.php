<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('home1');
            $table->string('home2');
            $table->string('home3');
            $table->string('home4');
            $table->string('home5');
            $table->string('home6');
            $table->string('home7');
            $table->string('home8');
            $table->string('home9');
            $table->string('home10');
            $table->string('home11');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('youtube');
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
        Schema::dropIfExists('home');
    }
}
