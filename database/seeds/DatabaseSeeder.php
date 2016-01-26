<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('PostsTableSeeder');
        $this->call('TagTableSeeder');

        factory('App\User')->create(
            [
                'name' => 'Rodrigo',
                'email' => 'rodrigoangelovalentini@gmail.com',
                'password' => bcrypt(123456),
                'remember_token' => str_random(10),
            ]
        );

    }
}
