<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(\App\User::class, 10)->make()->map(function($user) {
            return $user->getAttributes();
        })->all();
        \App\User::insert($users);
    }
}
