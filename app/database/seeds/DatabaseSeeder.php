<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		 $this->call('DeleteTableSeeder');
        $this->command->info('Tables deleted!');

       	 $this->call('UserTableSeeder');
        $this->command->info('User table seeded');



        $this->call('SectorTableSeeder');
        $this->command->info('Sector table seeded');

        $this->call('StarTableSeeder');
        $this->command->info('Star table seeded');

        $this->call('PlanetTableSeeder');
        $this->command->info('Planet table seeded');


	}

}
