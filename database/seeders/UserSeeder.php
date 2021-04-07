<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'José solís',
            'email' => 'j.solisgom@gmail.com',
            'password' => bcrypt('jose1177'),
        ]); 
        
        User::factory(99)->create();
    }
}
