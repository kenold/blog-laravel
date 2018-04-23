<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Kenold Beauplan',
            'email' => 'something4ken@gmail.com',
            'password' => bcrypt('mabekeke')
        ]);
    }
}
