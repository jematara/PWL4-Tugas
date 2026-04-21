<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function Symfony\Component\Clock\now;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'npm' => 1101,
            'username' => 'Admin_1',
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // $faker = Faker::create('id');

        // for($i = 1; $i<=10; $i++){
            
        //     DB::table('users')->insert([
        //         'name' => $faker->name,
        //         'email' => $faker->email,
        //         'password' => '123123',
        //     ]);
        // }
    }
}
