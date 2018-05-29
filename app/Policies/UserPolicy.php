<?php

namespace App\Policies;

use App\Model\admin\admin;
use App\Model\user\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the admin.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\admin\admin  $admin
     * @return mixed
     */
    public function view(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can create admins.
     *
     * @param  \App\Model\user\User  $user
     * @return mixed
     */
    public function create(admin $user)
    {
        //
        return $this->getPermission($user, 7);

    }

    /**
     * Determine whether the user can update the admin.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\admin\admin  $admin
     * @return mixed
     */
    public function update(admin $user)
    {
        //
        return $this->getPermission($user, 8);

    }

    /**
     * Determine whether the user can delete the admin.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\admin\admin  $admin
     * @return mixed
     */
    public function delete(admin $user)
    {
        //
        return $this->getPermission($user, 12);

    }

    protected function getPermission($user, $p_id)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == $p_id) {
                    return true;
                }

            }
        }
        return false;
    }
}
