<?php

namespace Database\Seeders;

use App\Models\JobOffer;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidateJobOfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            $randomCandidate = User::inRandomOrder()->first();
            $randomJobOffer = JobOffer::inRandomOrder()->first();

            DB::table('candidate_job_offer')->insert([
                'user_id' => $randomCandidate->id,
                'job_offer_id' => $randomJobOffer->id,
            ]);
        }
    }
}
