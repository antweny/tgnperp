<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branches = $this->arrayValues();

        foreach ($branches as $branch)
        {
            Branch::updateOrCreate($branch);
        }
    }

    //  Array of Values
    private function arrayValues(): array
    {
        return [
            ['name'=>'Executive','entity'=>'Government'],
            ['name'=>'Judiciary','entity'=>'Government'],
            ['name'=>'Legislative','entity'=>'Government'],
            ['name'=>'Profit','entity'=>'Private'],
            ['name'=>'Non-Profit','entity'=>'Private']
        ];
    }
}
