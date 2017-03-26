<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Type::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});
