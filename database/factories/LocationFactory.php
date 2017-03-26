<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Location::class, function (Faker\Generator $faker) {
    static $types;
    $types = $types ?: \App\Type::pluck('id')->all();

    return [
        'lat' => $faker->latitude,
        'lng' => $faker->longitude,
        'type_id' => $faker->randomElement($types),
        'description' => $faker->text,
    ];
});
