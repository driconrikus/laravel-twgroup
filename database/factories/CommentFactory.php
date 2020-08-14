<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'publication_id' => rand(1,15),
        'content' => $faker->text(32),
        'status' => $faker->randomElement(['APROBADO', 'NO_APROBADO'])
    ];
});
