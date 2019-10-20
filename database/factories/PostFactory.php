<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        "title" => $faker -> sentence(6),
        "content" => $faker -> text(250),
        "likes" => rand(1,1000)
    ];
});
