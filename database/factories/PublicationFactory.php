<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Publication::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'user_id' => rand(1,128),
        'title' => $title,
        'slug' => Str::slug($title),
        'content' => $faker->text(256)
    ];
});
