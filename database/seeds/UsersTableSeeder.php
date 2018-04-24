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
        $user = App\User::create([
            'name' => 'Kenold Beauplan',
            'email' => 'something4ken@gmail.com',
            'password' => bcrypt('mabekeke'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/avatar.jpg',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore placeat libero minima eveniet, magni doloremque nulla suscipit ab. Eius harum voluptatibus quaerat rerum eveniet, sint velit suscipit. Ipsa, quidem et!',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
