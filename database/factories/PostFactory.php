<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Post;
use Wink\WinkAuthor;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'id' => $faker->uuid,
        'title' => $faker->unique()->catchPhrase,
        'excerpt' => $faker->paragraphs($nb = 1, $asText = true),
        'slug' => function (array $post) {
            return str_slug($post['title']);
        },
        'body' => $faker->paragraphs($nb = 5, $asText = true),
        'published' => true,
        'author_id' => WinkAuthor::first()->id,
        'featured_image' => '/storage/tests/'.$faker->image($dir='public/storage/tests', $width='800', $height='480', $category='cats', $fullPath=false),
        'featured_image_caption' => '',
        'publish_date' =>  $faker->dateTimeThisDecade($max = '+5 years', $timezone = null),
        'meta' => (object) [],
    ];
});
