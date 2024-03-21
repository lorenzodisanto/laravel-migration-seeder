<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// importo model Train
use App\Models\Train;

// importo classe Faker
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // creo 10 dati fake
        for( $i = 0; $i < 100; $i++ ) {
            $train = new Train;

            $train->company = $faker->company();
            $train->station_start = $faker->words(3, true);
            $train->station_arrive = $faker->words(3, true);
            $train->departure_date = $faker->date();
            $train->time_start_at = $faker->time();
            $train->time_arrive_at = $faker->time();
            $train->train_code = $faker->numerify();
            $train->coach_numbers = $faker->numberBetween(3,12);
            $train->ontime = $faker->numberBetween(0,1);
            $train->deleted = $faker->numberBetween(0,1);
            $train->save();
        }
    }
}
