<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;
use Str;
use Hash;

use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Pablo',
            'last_name' => 'Gomez',
            'address' => 'La Tola',
            'active' => true,
            'email' => 'pgomezghds@gmail.com',
            'date_birthday' => Carbon::create('1990', '06', '10'),
            'password' => Hash::make('123456789')
        ]);
    }
}
