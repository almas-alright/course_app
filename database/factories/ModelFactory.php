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
        $name = $faker->sentence(6, true);
    return [
        'name' =>$name,
        'slug' =>str_slug($name),
        'description' => $faker->paragraph(6, true),
        'price'=> $faker->numberBetween(120, 500),
        'start_at' => $faker->date('Y-m-d', 'now'),
        'end_at' => $faker->date('Y-m-d', '2017-12-30'),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {   
        $title = $faker->sentence(6, true);
    return [
        'title' => $title,
        'slug' => str_slug($title),
        'content' => $faker->paragraph(6, true),
    ];
});
