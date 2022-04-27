<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    //  Run the database seeds.
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
        return ['user_create','user_view','user_update','user_delete',
                'role_create','role_view','role_update','role_delete',
                'permission_create','permission_view','permission_update','permission_delete',
                'individual_create','individual_view','individual_update','individual_delete',
                'organization_create','organization_view','organization_update','organization_delete',
                'location_create','location_view','location_update','location_delete',
            ];
    }



}
