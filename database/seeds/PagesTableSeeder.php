<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page = factory(App\Models\Page::class)->create([
            'title' => 'À Propos',
            'slug' => str_slug('À Propos'),
        ]);
    }
}
