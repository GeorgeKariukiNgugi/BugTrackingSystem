<?php

namespace App\Policies;

use App\User;
use App\FirstLineSupport;
use Illuminate\Auth\Access\HandlesAuthorization;

class FirstLineSupportPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any firstLineSupport.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the firstLineSupport.
     *
     * @param  App\User  $user
     * @param  App\FirstLineSupport  $firstLineSupport
     * @return bool
     */
    public function view(User $user, FirstLineSupport $firstLineSupport)
    {
        return false;
    }

    /**
     * Determine whether the user can create a firstLineSupport.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the firstLineSupport.
     *
     * @param  App\User  $user
     * @param  App\FirstLineSupport  $firstLineSupport
     * @return bool
     */
    public function update(User $user, FirstLineSupport $firstLineSupport)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the firstLineSupport.
     *
     * @param  App\User  $user
     * @param  App\FirstLineSupport  $firstLineSupport
     * @return bool
     */
    public function delete(User $user, FirstLineSupport $firstLineSupport)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the firstLineSupport.
     *
     * @param  App\User  $user
     * @param  App\FirstLineSupport  $firstLineSupport
     * @return bool
     */
    public function restore(User $user, FirstLineSupport $firstLineSupport)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the firstLineSupport.
     *
     * @param  App\User  $user
     * @param  App\FirstLineSupport  $firstLineSupport
     * @return bool
     */
    public function forceDelete(User $user, FirstLineSupport $firstLineSupport)
    {
        return false;
    }
}
