<?php

use Faker\Generator as Faker;

$factory->define(\App\Ambulance::class, function (Faker $faker) {
    return [
        'plate' => str_random(6),
        'status' => 'in-route', //
        'lat' => $faker->latitude,
        'lng' => $faker->longitude
    ];
});
