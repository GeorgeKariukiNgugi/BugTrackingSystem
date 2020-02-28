<?php

namespace App\Policies;

use App\User;
use App\Bug;
use Illuminate\Auth\Access\HandlesAuthorization;

class BugPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any bug.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the bug.
     *
     * @param  App\User  $user
     * @param  App\Bug  $bug
     * @return bool
     */
    public function view(User $user, Bug $bug)
    {
        return false;
    }

    /**
     * Determine whether the user can create a bug.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the bug.
     *
     * @param  App\User  $user
     * @param  App\Bug  $bug
     * @return bool
     */
    public function update(User $user, Bug $bug)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the bug.
     *
     * @param  App\User  $user
     * @param  App\Bug  $bug
     * @return bool
     */
    public function delete(User $user, Bug $bug)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the bug.
     *
     * @param  App\User  $user
     * @param  App\Bug  $bug
     * @return bool
     */
    public function restore(User $user, Bug $bug)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the bug.
     *
     * @param  App\User  $user
     * @param  App\Bug  $bug
     * @return bool
     */
    public function forceDelete(User $user, Bug $bug)
    {
        return false;
    }
}
