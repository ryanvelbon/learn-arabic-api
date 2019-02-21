<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartsOfSpeechTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('parts_of_speech')->delete();

        $items = array('noun', 'verb', 'pronoun', 'adjective', 'adverb', 'preposition', 'conjunction', 'interjection');

        foreach($items as $item){
        	DB::table('parts_of_speech')->insert([
        		'title' => $item,
        	]);
        }
    }
}
