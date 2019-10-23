<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;
use App\Post;
use App\User;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'reply'		=> $faker->sentence(10),
        'post_id'	=> Post::take(10)->get()->random()->id,
        'user_id'	=> User::take(10)->get()->random()->id
    ];
});
