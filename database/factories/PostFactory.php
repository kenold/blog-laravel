<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(6),
        'slug' => str_slug('title', '-'),
        'content' => $faker->paragraph(3),
        'category_id' => $faker->randomElement(['1', '2', '3', '4', '5']),
        'featured' => $faker->imageUrl(800, 400, 'people', true, 'Faker')
    ];
});
