<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Hashtag;
use Faker\Generator as Faker;

$factory->define(Hashtag::class, function (Faker $faker) {
    static $order=1;
    return [
        'id'        => $order++,
        'name'      => $faker->word(),
    ];
});
