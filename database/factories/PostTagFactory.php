<?php

use Faker\Generator as Faker;

$factory->define(App\PostTag::class, function (Faker $faker) {
    return [
        'post_id' => $faker->numberBetween(1, 10),
        'tag_id' => $faker->numberBetween(1, 5)
    ];
});
