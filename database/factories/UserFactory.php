<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;
    $gender = collect(['M', 'F', 'O']);
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'dni' => $faker->randomNumber(8),
        'gender' => $gender->random(),
        'phone' => $faker->phoneNumber,
        'dob' => rand(1970, 2010) . '-' . rand(1, 12) . '-' . rand(1, 28),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
