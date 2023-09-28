<?php

namespace App\Policies;

use App\Models\Specialization;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class SpecializationPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_specialization');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Specialization $specialization): bool
    {
        return $user->can('view_specialization');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_specialization');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Specialization $specialization): bool
    {
        return $user->can('update_specialization');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Specialization $specialization): bool
    {
        return $user->can('delete_specialization');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Specialization $specialization): bool
    {
        return $user->can('restore_specialization');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Specialization $specialization): bool
    {
        return $user->can('forceDelete_specialization');
    }
}
