<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Csgos;
use Faker\Generator as Faker;

$factory->define(Csgos::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'main_role1' => $faker->randomElement(['awper.png', 'bomber.png', 'entry.png']),
        'main_role2' => $faker->randomElement(['awper.png', 'bomber.png', 'entry.png']),
        'main_role3' => $faker->randomElement(['awper.png', 'bomber.png', 'entry.png']),
        'tactical_role1' => $faker->randomElement(['ninja.png', 'support.png', 'nader.png']),
        'tactical_role2' => $faker->randomElement(['ninja.png', 'support.png', 'nader.png']),
        'tactical_role3' => $faker->randomElement(['ninja.png', 'support.png', 'nader.png']),
        'rank' => $faker->randomElement(['gold_nova1.png', 'master_guardian1.png']),
        'friend_code' => $faker->regexify('[0-9]{7}'),
        'server_region' => $faker->randomElement(['Singapore', 'Hongkong', 'Rusian']),
    ];
});
