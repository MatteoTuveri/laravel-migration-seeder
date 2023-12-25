<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $new_train = new Train();
            $new_train->agency = $faker->word();
            $new_train->departure_station = $faker->word();
            $new_train->arrival_station = $faker->word();
            $new_train->departure_time = $faker->dateTimeBetween('now', '+3 days');
            $new_train->arrival_time = $faker->dateTimeBetween('now', '+1 week');
            $new_train->train_code =  $faker->numberBetween(0, 2000);
            $new_train->carriages =  $faker->numberBetween(0, 10);
            $new_train->in_time = $faker->randomElement([true,false]);
            $new_train->cancelled = $faker->randomElement([true,false]);
            $new_train->save();
        }
    }
}
