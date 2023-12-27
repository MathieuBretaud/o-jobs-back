<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            $randomAddress = Address::inRandomOrder()->first();

            User::create([
                'address_id' => $randomAddress->id,
                'lastname' => fake()->name,
                'firstname' => fake()->name,
                'email' => fake()->email(),
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
            ]);
        }

        for ($i = 0; $i < 5; $i++) {
            $randomAddress = Address::inRandomOrder()->first();

            User::create([
                'address_id' => $randomAddress->id,
                'lastname' => fake()->name,
                'firstname' => fake()->name,
                'email' => fake()->email(),
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'role' => 'employer',
            ]);
        }

        User::create([
            'address_id' => $randomAddress->id,
            'lastname' => fake()->name,
            'firstname' => fake()->name,
            'email' => 'candidat@test.fr',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'address_id' => $randomAddress->id,
            'lastname' => fake()->name,
            'firstname' => fake()->name,
            'email' => 'employeur@test.fr',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'role' => 'employer',
        ]);
    }
}
