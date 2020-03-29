<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Members;
use Faker\Generator as Faker;

$autoIncrement = autoIncrement();

$factory->define(Members::class, function (Faker $faker) use ($autoIncrement) {
	$autoIncrement->next();
    return [
        'name' => $faker->name,
        'code' => $faker->regexify('[0-9]{15}'),
        'age' => $faker->randomElement(['9', '10']),
        'gender' => $faker->randomElement(['male', 'female']),
        'rank' => $faker->randomElement(['gold_nova1.png', 'master_guardian1.png']),
        'language' => $faker->country,
        'additional_info' => $faker->randomElement(['i want to play csgo competitive', 'i just want to having fun with this game']),
        'avatar' => $faker->randomElement(['defaultava.png']),
        'id_user' =>  $autoIncrement->current(),
        'id_steam' =>  $autoIncrement->current(),
        'id_csgo' =>  $autoIncrement->current()
    ];
});

function autoIncrement()
{
    for ($i = 0; $i < 1000; $i++) {
        yield $i;
    }
}
