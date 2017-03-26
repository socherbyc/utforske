<?php

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = factory(\App\Location::class, 10)->make()->map(function($location) {
            return $location->getAttributes();
        })->all();
        \App\Location::insert($locations);
    }
}
