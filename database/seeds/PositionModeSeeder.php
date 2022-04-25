<?php

namespace Database\Seeders;

use App\Models\PositionMode;
use Illuminate\Database\Seeder;

class PositionModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positionModes = $this->arrayValues();

        foreach ($positionModes as $positionMode)
        {
           PositionMode::updateOrCreate($positionMode);
        }
    }

    //  Array of Values
    private function arrayValues(): array
    {
        return [
            ['name'=>'Elected'],
            ['name'=>'Appointed'],
            ['name'=>'Special Seats'],
            ['name'=>'Hired'],
        ];
    }
}
