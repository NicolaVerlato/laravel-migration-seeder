<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i <= 5; $i++){
            $new_trip = new Trip();

            $new_trip->name = $faker->sentence(4);
            $new_trip->destination = $faker->country();
            $new_trip->departure_date = $faker->dateTimeThisYear('+2 months');
            $new_trip->description = $faker->paragraph();
            $new_trip->price = $faker->randomFloat(2, 100, 3000);
            $new_trip->duration = $faker->numberBetween(1, 100);
            $new_trip->is_available = $faker->numberBetween(0, 1);

            $new_trip->save();
        }
    }
}
