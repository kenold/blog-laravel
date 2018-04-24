<?php

use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {
    return [
        'tag' => $faker->randomElement(['Konpa', 'Sounds', 'Urban', 'Live'])
    ];
});
