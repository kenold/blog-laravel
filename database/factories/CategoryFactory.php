<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['News', 'Music', 'Videos', 'Gossip'])
    ];
});
