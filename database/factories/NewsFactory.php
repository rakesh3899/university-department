<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\News::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->text(50),
        'slug'  => Str::slug($faker->unique()->text()),
        'description'   => $faker->paragraph(50),
        'image'         => "storage/app/public/news/news_2019-12-245e02515d9ce01.jpg",
        'created_at'    => now(),
        'updated_at'    => now()
    ];
});
