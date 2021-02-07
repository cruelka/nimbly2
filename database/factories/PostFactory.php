<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'image'=>$faker->url(),
        'description'=>$faker->realText(),
        'is_promoted'=>$faker->boolean(),
        'ig_id'=>$faker->uuid,
        'user_id'=>$faker->numberBetween(1,20),
        'ad_ig_id'=>$faker->uuid,
    ];
});
