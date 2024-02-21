<?php

namespace App\Policies;

use App\Models\Rest_place;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class Rest_placePolicy
{
    public function before(User $user, $ability ):bool

    {
        return true;
    }
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user):bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Rest_place $restPlace):bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user):bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Rest_place $restPlace):bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Rest_place $restPlace):bool
    {
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Rest_place $restPlace): bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Rest_place $restPlace): bool
    {
        return true;
    }
}
