<?php

use Faker\Factory as Faker;

class DeleteTableSeeder extends Seeder
{


    public function run()
    {
        DB::table('planets')->delete();
        DB::table('stars')->delete();
        DB::table('sectors')->delete();
        DB::table('users')->delete();

        }





}