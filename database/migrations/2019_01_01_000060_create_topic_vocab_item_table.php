<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicVocabItemTable extends Migration
{
    public function up()
    {
        Schema::create('topic_vocab_item', function(Blueprint $table){
            $table->unsignedInteger('topic_id');
            $table->foreign('topic_id')
                ->references('id')
                ->on('topics')
                ->onDelete('cascade');

            $table->unsignedInteger('vocab_item_id');
            $table->foreign('vocab_item_id')
                ->references('id')
                ->on('vocab_items')
                ->onDelete('cascade');

            $table->unique(array('topic_id', 'vocab_item_id'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('topic_vocab_item');
    }
}
