<?php

namespace Database\Seeders;

use App\Models\ContractType;
use App\Models\Establishment;
use App\Models\Job;
use App\Models\JobOffer;
use App\Models\User;
use Illuminate\Database\Seeder;

class JobOfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 6; $i++) {
            $randomJob = Job::all();
            $randomContracts = ContractType::all();
            $employer = User::where('role', 'employer')->get();

            JobOffer::create([
                'employer_id' => $employer->random()->id,
                'job_id' => $randomJob->random()->id,
                'contract_type_id' => $randomContracts->random()->id,
                'title' => fake()->sentence(4),
                'content' => fake()->sentence(50),
                'status' => fake()->sentence(2),
            ]);
        }
    }
}
