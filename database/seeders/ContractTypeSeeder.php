<?php

namespace Database\Seeders;

use App\Models\ContractType;
use Illuminate\Database\Seeder;

class ContractTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contracts = [
            'CDI',
            'CDD',
            'Intérimaire / Extra',
            'Apprentissage / Alternance',
            'Bénévolat',
        ];
        foreach ($contracts as $key => $value) {
            ContractType::create([
                'name' => $value,
            ]);
        }
    }
}
