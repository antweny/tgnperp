<?php

namespace App\Policies;

use App\Models\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /* Determine whether the employee can create new resource. */
    public function create(Admin $user)
    {
        return $user->can('user_create');
    }

    /* Determine whether the employee can view the resources. */
    public function view(Admin $user)
    {
        return $user->can('user_view');
    }

    /* Determine whether the employee can update the question. */
    public function update(Admin $user)
    {
        return $user->can('user_update');
    }

    /*  Determine whether the employee can delete the question. */
    public function delete(Admin $user)
    {
        return $user->can('user_delete');
    }

}
