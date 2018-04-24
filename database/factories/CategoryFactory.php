<?php

use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['News', 'Music', 'Videos', 'Gossip'])
    ];
});
