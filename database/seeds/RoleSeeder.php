<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = $this->arrayValues();

        foreach ($roles as $role)
        {
           Role::updateOrCreate($role);
        }
    }

    //  Array of Values
    private function arrayValues(): array
    {
        return [
            ['name'=>'superAdmin'],
            ['name'=>'admin'],
            ['name'=>'data-entry'],
        ];
    }
}
