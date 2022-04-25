<?php

namespace Database\Seeders;

use App\Models\Term;
use Illuminate\Database\Seeder;

class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $terms = $this->arrayValues();

        foreach ($terms as $term)
        {
            Term::updateOrCreate($term);
        }
    }

    //  Array of Values
    private function arrayValues(): array
    {
        return [
            ['name'=>'1st Term'],
            ['name'=>'2nd Term'],
            ['name'=>'3rd Term'],
            ['name'=>'4th Term'],
        ];
    }
}
