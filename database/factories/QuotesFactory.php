<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Quotes;
use Faker\Generator as Faker;

$factory->define(Quotes::class, function (Faker $faker) {
    return [
        'quote' => $faker->paragraph(2),
        'author' => $faker->name
        //
    ];
});
