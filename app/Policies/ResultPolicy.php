<?php

namespace App\Policies;

use App\Model\user\User;
use App\Model\admin\admin;

use App\Model\user\Result;
use Illuminate\Auth\Access\HandlesAuthorization;

class ResultPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the result.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Model\user\Result  $result
     * @return mixed
     */
    public function view(admin $user)
    {
        //
        return $this->getPermission($user, 24);

    }

    /**
     * Determine whether the user can create results.
     *
     * @param  \App\Model\user\User  $user
     * @return mixed
     */
    public function create(admin $user)
    {
        //
        return $this->getPermission($user, 19);

    }

    /**
     * Determine whether the user can update the result.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Model\user\Result  $result
     * @return mixed
     */
    public function update(admin $user)
    {
        //
        return $this->getPermission($user, 20);

    }

    /**
     * Determine whether the user can delete the result.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Model\user\Result  $result
     * @return mixed
     */
    public function delete(admin $user)
    {
        //
        return $this->getPermission($user, 21);

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
