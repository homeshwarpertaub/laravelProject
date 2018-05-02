<?php

namespace App\Policies;

use App\Model\user\User;
use App\Model\admin\admin;

use App\Model\user\Delivery;
use Illuminate\Auth\Access\HandlesAuthorization;

class DeliveryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the delivery.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Model\user\Delivery  $delivery
     * @return mixed
     */
    public function view(admin $user)
    {
        //
        return $this->getPermission($user, 23);

    }

    /**
     * Determine whether the user can create deliveries.
     *
     * @param  \App\Model\user\User  $user
     * @return mixed
     */
    public function create(admin $user)
    {
        //
        return $this->getPermission($user, 16);

    }

    /**
     * Determine whether the user can update the delivery.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Model\user\Delivery  $delivery
     * @return mixed
     */
    public function update(admin $user)
    {
        //
        return $this->getPermission($user, 17);

    }

    /**
     * Determine whether the user can delete the delivery.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Model\user\Delivery  $delivery
     * @return mixed
     */
    public function delete(admin $user)
    {
        //
        return $this->getPermission($user, 18);

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
