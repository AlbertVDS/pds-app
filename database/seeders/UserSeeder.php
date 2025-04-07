<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 300) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role_id' => rand(1, 100) <= 99 ? 2 : 1,
                'created_at' => now(),
                'updated_at' => now(),

            ]);
        }
    }
}
