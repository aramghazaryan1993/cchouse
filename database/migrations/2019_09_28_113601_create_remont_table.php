<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemontTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remont', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('remont1');
            $table->string('remont2');
            $table->string('remont3');
            $table->string('remont4');
            $table->string('remont5');
            $table->string('remont6');
            $table->string('remont7');
            $table->string('remont8');
            $table->string('remont9');
            $table->string('remont10');
            $table->string('remont11');
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
        Schema::dropIfExists('remont');
    }
}
