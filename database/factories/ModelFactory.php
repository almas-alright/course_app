<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('123456'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Training::class, function (Faker\Generator $faker) {   

    return [
        'name' =>$faker->sentence(6, true),
        'description' => $faker->paragraph(6, true),
        'price'=> $faker->numberBetween(120, 500),
        'start_at' => $faker->date('Y-m-d', 'now'),
        'end_at' => $faker->date('Y-m-d', '2017-12-30'),
    ];
});
