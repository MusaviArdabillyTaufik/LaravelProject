<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Users;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  //       User::create([
  //       'name'  => str_random(20),
  //       'nim' => str_random(12),
  //       'faculty'  => 'Vokasi'
		// ]);

        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 50; $i++){
            DB::table('users')->insert([
                'name' => $faker->name,
                'nim' => $faker->regexify('[0-9]{15}'),
                // 'nim' => $faker->$faker->unique()->randomNumber($nbDigits = 15),
                'faculty' => "Vokasi",
                'filename' => "fakerAva.PNG"]);
        }
    }
}
 