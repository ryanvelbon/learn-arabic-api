<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSentencesTable extends Migration
{
    public function up()
    {
        Schema::create('sentences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sentence_ar', 500)->collation('utf8_general_ci');
            $table->string('sentence_en', 500);
        });
    }

    public function down()
    {
        Schema::dropIfExists('sentences');
    }
}
