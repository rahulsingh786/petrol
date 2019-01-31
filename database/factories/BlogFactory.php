<?php

use Faker\Generator as Faker;

$factory->define(App\Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->realText($maxNbChars = 50, $indexSize = 2)
    ];
});
