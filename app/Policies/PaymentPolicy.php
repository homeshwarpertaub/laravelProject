<?php

namespace App\Policies;

use App\Model\admin\admin;
use App\Model\user\User;
use App\Model\user\Payment;
use Illuminate\Auth\Access\HandlesAuthorization;

class PaymentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the payment.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Model\user\Payment  $payment
     * @return mixed
     */
    public function view(admin $user)
    {
        //

    }

    /**
     * Determine whether the user can create payments.
     *
     * @param  \App\Model\user\User  $user
     * @return mixed
     */
    public function create(admin $user)
    {
        //
        return $this->getPermission($user, 13);

    }

    /**
     * Determine whether the user can update the payment.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Model\user\Payment  $payment
     * @return mixed
     */
    public function update(admin $user)
    {
        //
        return $this->getPermission($user, 14);

    }

    /**
     * Determine whether the user can delete the payment.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Model\user\Payment  $payment
     * @return mixed
     */
    public function delete(admin $user)
    {
        //
        return $this->getPermission($user, 15);

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
