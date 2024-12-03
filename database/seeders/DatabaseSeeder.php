<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Major;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory(150)->create(
            // [
            //     'name' => 'test name',
            //     'email' => 'test@test.com',
            //     'email_verified_at' => now(),
            //     'role'=> 'doctor',
            //     'major_id' => 1,
            //     'image'=>'2.png',
            //     'password' =>  Hash::make('password'),
            //     'remember_token' => Str::random(10),
            // ]
        );



        Major::factory(100)->create();
    }
}
