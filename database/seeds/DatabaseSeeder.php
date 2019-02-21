<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        $this->call(PartsOfSpeechTableSeeder::class);
        $this->call(TopicsTableSeeder::class);
        // $this->call(::class);
        // $this->call(::class);
        // $this->call(::class);
        // $this->call(::class);

        Model::reguard();
    }
}
