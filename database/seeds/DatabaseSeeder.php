<?php

use Wink\WinkPage;
use Wink\WinkPost;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // on supprime les posts et page existantes
        WinkPost::truncate();
        WinkPage::truncate();

        // on appel nos seeders
        $this->call(PostsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
    }
}
