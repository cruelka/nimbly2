<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\UserHasHashtag::class, function (Faker $faker) {
    return [
        'user_id'        => $faker->numberBetween(1,20),
        'hashtag_id'     => $faker->numberBetween(1,20),
    ];
});
