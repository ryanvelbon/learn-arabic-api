<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartsOfSpeechTable extends Migration
{
    public function up()
    {
        Schema::create('parts_of_speech', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
        });
    }

    public function down()
    {
        Schema::dropIfExists('parts_of_speech');
    }
}
