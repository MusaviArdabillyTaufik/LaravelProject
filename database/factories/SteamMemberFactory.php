<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Steam_member;
use Faker\Generator as Faker;

$factory->define(Steam_member::class, function (Faker $faker) {
    return [
        'friend_code' => $faker->regexify('[0-9]{15}'),
        'name' => $faker->name,
    ];
});
