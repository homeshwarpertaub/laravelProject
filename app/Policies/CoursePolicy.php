<?php

namespace App\Policies;

use App\Model\admin\admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the course.
     *
     * @param  \App\Model\user\User $user
     * @param  \App\Model\admin\course $course
     * @return mixed
     */
    public function view(admin $user)
    {
        //
    }

    /**
     * Determine whether the admin can create courses.
     *
     * @param  \App\Model\admin\admin $user
     * @return mixed
     */
    public function create(admin $user)
    {
        //
        return $this->getPermission($user, 4);
    }

    /**
     * Determine whether the user can update the course.
     *
     * @param  \App\Model\admin\admin $user
     * @param  \App\Model\admin\course $course
     * @return mixed
     */
    public function update(admin $user)
    {
        //
        return $this->getPermission($user, 5);

    }

    /**
     * Determine whether the user can delete the course.
     *
     * @param  \App\Model\user\User $user
     * @param  \App\Model\admin\course $course
     * @return mixed
     */
    public function delete(admin $user)
    {
        //
        return $this->getPermission($user, 6);


    }

    public function category(admin $user)
    {
        //
        return $this->getPermission($user, 11);


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
