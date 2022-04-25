<?php

namespace Database\Seeders;

use App\Models\Phase;
use Illuminate\Database\Seeder;

class PhaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phases = $this->arrayValues();

        foreach ($phases as $phase)
        {
            Phase::updateOrCreate($phase);
        }
    }

    //  Array of Values
    private function arrayValues(): array
    {
        return [
            ['name'=>'1st Phase','start_date'=>'1961-12-09','end_date'=>'1985-11-01'],
            ['name'=>'2nd Phase','start_date'=>'1985-11-01','end_date'=>'1995-11-12'],
            ['name'=>'3rd Phase','start_date'=>'1995-11-12','end_date'=>'2005-11-10'],
            ['name'=>'4th Phase','start_date'=>'2005-11-10','end_date'=>'2015-11-09'],
            ['name'=>'5th Phase','start_date'=>'2015-11-09','end_date'=>'2021-03-27'],
            ['name'=>'6th Phase','start_date'=>'2021-03-27','end_date'=>null],
        ];
    }
}
