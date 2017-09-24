<?php

use Illuminate\Database\Seeder;

class AmbulancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Ambulance::class, 22)->create();
    }
}
