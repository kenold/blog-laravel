<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => 'Laravel\'s Blog',
            'address' => 'Miramar, FL',
            'contact_number' => '954-709-3853',
            'contact_email' => 'kenfxstudios@gmail.com',
        ]);
    }
}
