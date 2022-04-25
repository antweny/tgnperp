<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = $this->arrayValues();

        foreach ($permissions as $permission)
        {
            Permission::updateOrCreate(['name'=>$permission]);
        }
    }

    //  Array of Values
    private function arrayValues(): array
    {
//        return [
//            ['name'=>'superAdmin'],
//            ['name'=>'admin'],
//            ['name'=>'data-entry'],
//        ];
        return ['user_create','user_delete','user_update','user_view'];
    }
}
