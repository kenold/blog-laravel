<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    
    $title = $faker->sentence(6);
    $slug = str_slug($title);

    return [
        'title' => $title,
        'slug' => $slug,
        'content' => $faker->paragraph(3),
        'category_id' => $faker->randomElement(['1', '2', '3', '4', '5']),
        'featured' => $faker->imageUrl(800, 400, 'people', true, 'Faker')
    ];
});
