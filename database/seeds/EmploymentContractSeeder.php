<?php

namespace Database\Seeders;

use App\Models\EmploymentContract;
use Illuminate\Database\Seeder;

class EmploymentContractSeeder extends Seeder
{
    //  Run the database seeds.
    public function run()
    {
        $employmentContracts = $this->arrayValues();

        foreach ($employmentContracts as $employmentContract)
        {
            EmploymentContract::updateOrCreate(['name'=>$employmentContract]);
        }
    }

    //  Array of Values
    private function arrayValues(): array
    {
        return [];
    }
}
