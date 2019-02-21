<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('topics')->delete();

        $items = array(
        	'animals',
        	'anatomy',
        	'body care',
        	'buildings & infrastructure',
        	'jobs, occupations & professions',
        	'business',
        	'calendar',
        	'transportation & vehicles',
        	'clothes',
        	'colours',
        	'computers',
        	'countries',
        	'family and relationships',
        	'food',
        	'gardening & plants',
        	'geography',
        	'health',
        	'house',
        	'law',
        	'math',
        	'drinking, smoking & drugs',
        	'music',
        	'office',
        	'education',
        	'gases, liquids, metals, & materials',
        	'crime',
        	'weapons',
        	'sports',
        	'beach',
        	'time',
        	'tools',
        	'travel',
        	'hotel',        	
        );

        foreach($items as $item){
        	DB::table('topics')->insert([
        		'title' => $item,
        	]);
        }
    }
}
