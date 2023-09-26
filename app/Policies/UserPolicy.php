<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_user');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, user $model): bool
    {
        return $user->can('view_user');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_user');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, user $model): bool
    {
        return $user->can('update_user');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, user $model): bool
    {
        return $user->can('delete_user');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, user $model): bool
    {
        return $user->can('restore_user');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, user $model): bool
    {
        return $user->can('forceDelete_user');
    }
}
