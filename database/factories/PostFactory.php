<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use App\User;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id'	=> User::take(10)->get()->random(),
        'title'		=> $faker->sentence(15),
        'content'	=> $faker->sentence(200)
    ];
});
