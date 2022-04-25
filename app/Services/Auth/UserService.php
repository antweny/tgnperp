<?php

namespace App\Services\Auth;

use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserService
{

    /* Create New User */
    public function store($model,$request)
    {
        $request['plain_password'] = $this->randomString(); //capture plain text password
        DB::beginTransaction();
        try {
            $request['password'] = $this->encryptPassword($request['plain_password']);
            $user = $model->create($request);
            isset($request['roles']) && $this->assignRoles($user, $request['roles']); //Assign roles to user
            DB::commit();
//            event(new AdminRegisteredEvent($request));  //send email notification
            return true;
        }
        catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    //  Updating user details
    public function update($model,$request)
    {
        DB::beginTransaction();
        try {
            $user = $model->update($request);
            isset($request['roles']) ? $this->updateRoles($model,$request['roles']) : $this->removeRoles($model);
            DB::commit();
            return true;
        }
        catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    //Assign Roles to New User
    private function assignRoles($user, $roles) : void
    {
        $user->assignRole($roles);
    }

    //Update Roles to existing user
    private function updateRoles($user, $roles) : void
    {
        $user->roles()->sync($roles);
    }

    //  Remove all roles from an existing user user
    private function removeRoles($user) : void
    {
        $user->roles()->detach();
    }

    //  Create Random Password
    private function randomString($int = 10): string
    {
        return Str::random($int);
    }

    /*  Password encryption */
    private function encryptPassword($password): string
    {
        return Hash::make($password);
    }

    //  Temporally store user dataReturn user data
    private function requestValues($data): array
    {
        return [
            'name' =>$data['name'],
            'email' => $data['email'],
            'plain_password' => $this->randomString(),
        ];
    }








}
