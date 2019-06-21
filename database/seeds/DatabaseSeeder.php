<?php

use Wink\WinkPost;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // on nettoie les images de test
        if (Storage::exists('public/storage/tests')) {
            Storage::deleteDirectory('public/storage/tests');
        }
        if (! Storage::exists('public/storage/tests')) {
            Storage::makeDirectory('public/storage/tests');
        }
        // on supprime les posts existants
        WinkPost::truncate();
        // on appel nos seeders
        $this->call(PostsTableSeeder::class);
    }
}
