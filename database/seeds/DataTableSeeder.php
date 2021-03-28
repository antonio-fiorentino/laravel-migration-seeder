<?php

use Illuminate\Database\Seeder;
use App\Data;
use Faker\Generator as Faker;

class DataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $data = new Data();
            $data->name = $faker->name();
            $data->year_of_birth = rand(1960, 1995);
            $data->email = $faker->email();
            $data->spouse = $faker->name();
            $data->save();
        }
    }
}
