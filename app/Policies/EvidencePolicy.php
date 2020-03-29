<?php

namespace App\Policies;

use App\User;
use App\Evidence;
use Illuminate\Auth\Access\HandlesAuthorization;

class EvidencePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any evidence.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the evidence.
     *
     * @param  App\User  $user
     * @param  App\Evidence  $evidence
     * @return bool
     */
    public function view(User $user, Evidence $evidence)
    {
        return false;
    }

    /**
     * Determine whether the user can create a evidence.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the evidence.
     *
     * @param  App\User  $user
     * @param  App\Evidence  $evidence
     * @return bool
     */
    public function update(User $user, Evidence $evidence)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the evidence.
     *
     * @param  App\User  $user
     * @param  App\Evidence  $evidence
     * @return bool
     */
    public function delete(User $user, Evidence $evidence)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the evidence.
     *
     * @param  App\User  $user
     * @param  App\Evidence  $evidence
     * @return bool
     */
    public function restore(User $user, Evidence $evidence)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the evidence.
     *
     * @param  App\User  $user
     * @param  App\Evidence  $evidence
     * @return bool
     */
    public function forceDelete(User $user, Evidence $evidence)
    {
        return false;
    }
}
