<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->paragraph(6),
        'author' => $faker->name,
        'featured' => $faker->randomDigitNotNull,
        'user_id' => '1',
        'category_id' => $faker->randomDigitNotNull
    ];
});
