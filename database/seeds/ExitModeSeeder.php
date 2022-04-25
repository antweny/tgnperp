<?php

namespace Database\Seeders;

use App\Models\ExitMode;
use Illuminate\Database\Seeder;

class ExitModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exitModes = $this->arrayValues();

        foreach ($exitModes as $exitMode)
        {
            ExitMode::updateOrCreate($exitMode);
        }
    }

    //  Array of Values
    private function arrayValues(): array
    {
        return [
            ['name'=>'End of Term'],
            ['name'=>'Retired'],
            ['name'=>'Transfer'],
            ['name'=>'Terminated'],
            ['name'=>'Resigned'],
            ['name'=>'Death'],
        ];
    }
}
