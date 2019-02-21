<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSentenceVocabItemTable extends Migration
{
    public function up()
    {
        Schema::create('sentence_vocab_item', function (Blueprint $table) {
            $table->unsignedInteger('sentence_id');
            $table->foreign('sentence_id')
                ->references('id')
                ->on('sentences')
                ->onDelete('cascade');

            $table->unsignedInteger('vocab_item_id');
            $table->foreign('vocab_item_id')
                ->references('id')
                ->on('vocab_items')
                ->onDelete('cascade');

            $table->unique(array('sentence_id', 'vocab_item_id'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('sentence_vocab_item');
    }
}
