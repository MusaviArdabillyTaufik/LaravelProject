<?php

use Illuminate\Database\Seeder;
use App\Csgos;
use Faker\Factory as Faker;

class CsgosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(App\Csgos::class,10)->create();
    }
}
