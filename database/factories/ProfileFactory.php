<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Profile;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'id' => $faker->numberBetween(1, 1000),
        'user_id' => $faker ->numberBetween(1, 20),
        'photo' => $faker->imageUrl(),
        'age' => $faker->numberBetween(0, 100),
        'sex' => $faker->boolean,
        'location' => $faker->address,
    ];
});
