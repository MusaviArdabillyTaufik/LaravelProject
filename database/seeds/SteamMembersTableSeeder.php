<?php

use Illuminate\Database\Seeder;
use App\Steam_member;
use Faker\Factory as Faker;

class SteamMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(App\Steam_member::class,10)->create();
    }
}
