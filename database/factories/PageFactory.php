<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Page;
use Faker\Generator as Faker;

$factory->define(Page::class, function (Faker $faker) {
    return [
        'id' => $faker->uuid,
        'body' => $faker->paragraphs($nb = 5, $asText = true),
        'meta' => (object) [],
    ];
});
