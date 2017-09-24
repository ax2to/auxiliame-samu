<?php

use Faker\Generator as Faker;

$factory->define(\App\Issue::class, function (Faker $faker) {
    $user = \App\User::all()->random();
    $description = $faker->paragraph;
    return [
        'user_id' => $user,
        'description' => $description,
        'search' => $user->id . ' ' . $user->name . ' ' . $user->dni . ' ' . $user->phone . ' ' . $description,
        'status' => 'new',
    ];
});
