<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVocabItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vocab_items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('part_of_speech_id');
            $table->foreign('part_of_speech_id')->references('id')->on('parts_of_speech');
            $table->string('item_ar', 50)->collation('utf8_general_ci');
            $table->string('item_en', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vocab_items');
    }
}
