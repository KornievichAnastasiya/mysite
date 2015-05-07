<?php

use Faker\Factory as Faker;

class SectorTableSeeder extends Seeder
{


    public function run()
    {


        $faker = Faker::create();
        $count = rand(1, 10);

        for ($i = 0; $i < $count; $i++) {
            $sector = new Sector();

            $sector->name = $faker->firstName;
            $sector->description = $faker->lastName;
            $sector->save();
        }



}

}