<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::insert([
                'email' =>  'mdmarufnishan@gmail.com',
                'phone' => '01718863771',
                'phone2' => '01708582044',
                'address' => 'Ashulia,Savar,Dhaka',
                'map' => '#',
                'twiter' =>  '#',
                'facebook' => '#',
                'pinterest' => '#',
                'instagram' => '#',
                'youtube' => '#',
            ]);
    }
}
