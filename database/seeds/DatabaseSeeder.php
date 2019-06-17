<?php

// use File;
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
        // File::cleanDirectory(public_path('storage/app/public/wink/images/'));
        Storage::deleteDirectory('public/tests');
        Storage::makeDirectory('public/tests');
        $this->call(PostsTableSeeder::class);
    }
}
