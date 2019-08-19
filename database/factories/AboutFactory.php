<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\About;
use Faker\Generator as Faker;

$factory->define(About::class, function (Faker $faker) {
    return [
        'about' => $faker->paragraph(5),
        'active_text' => $faker->randomDigitNotNull
        //
    ];
});
