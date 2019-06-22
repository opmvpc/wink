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
        'featured_image' => 'theme/img/post-bg.jpg',
        'featured_image_caption' => 'illustration article',
        'publish_date' =>  $faker->dateTimeThisDecade($max = '+5 years', $timezone = null),
        'meta' => (object) [],
    ];
});
