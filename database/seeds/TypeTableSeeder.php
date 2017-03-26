<?php

use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types= factory(\App\Type::class, 10)->make()->map(function($type) {
            return $type->getAttributes();
        })->all();
        \App\Type::insert($types);
    }
}
