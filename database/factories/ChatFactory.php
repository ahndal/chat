<?php

use Faker\Generator as Faker;

$factory->define(App\Chat::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min=1, $mix=30),
        'friend_id' => $faker->numberBetween($min=1, $mix=30),
        'chat' => $faker->text($maxNbChars=150),
    ];
});
