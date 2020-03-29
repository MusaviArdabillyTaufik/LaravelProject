<?php

use Illuminate\Database\Seeder;
use App\Members;
use Faker\Factory as Faker;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(App\Members::class,10)->create();
    }
}
