<?php

namespace App\Policies;

use App\User;
use App\LeadApproval;
use Illuminate\Auth\Access\HandlesAuthorization;

class LeadApprovalPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any leadApproval.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the leadApproval.
     *
     * @param  App\User  $user
     * @param  App\LeadApproval  $leadApproval
     * @return bool
     */
    public function view(User $user, LeadApproval $leadApproval)
    {
        return false;
    }

    /**
     * Determine whether the user can create a leadApproval.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the leadApproval.
     *
     * @param  App\User  $user
     * @param  App\LeadApproval  $leadApproval
     * @return bool
     */
    public function update(User $user, LeadApproval $leadApproval)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the leadApproval.
     *
     * @param  App\User  $user
     * @param  App\LeadApproval  $leadApproval
     * @return bool
     */
    public function delete(User $user, LeadApproval $leadApproval)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the leadApproval.
     *
     * @param  App\User  $user
     * @param  App\LeadApproval  $leadApproval
     * @return bool
     */
    public function restore(User $user, LeadApproval $leadApproval)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the leadApproval.
     *
     * @param  App\User  $user
     * @param  App\LeadApproval  $leadApproval
     * @return bool
     */
    public function forceDelete(User $user, LeadApproval $leadApproval)
    {
        return false;
    }
}
