<?php

use Carbon\Carbon;

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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\News::class, function(Faker\Generator $faker) {
    $placeHolder = ['abstract', 'animals', 'business', 'cats', 'city', 'food', 'nature', 'sports'];
    $img_type = $faker->randomElement($placeHolder);
    return [
        'title' => $faker->realText(40),
        'summary' => $faker->realText(200),
        'description' => $faker->paragraph(50, false),
        'image' => $faker->image(public_path('uploads/images'), 900, 300, $img_type, false),
        'created_at' => Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon::now()->toDateTimeString(),
    ];
});
