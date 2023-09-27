<?php

namespace App\Policies;

use App\Models\User;
use App\Models\WebSetting;
use Illuminate\Auth\Access\Response;

class WebSettingPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_setting::web');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, WebSetting $webSetting): bool
    {
        return $user->can('view_setting::web');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_setting::web');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, WebSetting $webSetting): bool
    {
        return $user->can('update_setting::web');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, WebSetting $webSetting): bool
    {
        return $user->can('delete_setting::web');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, WebSetting $webSetting): bool
    {
        return $user->can('restore_setting::web');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, WebSetting $webSetting): bool
    {
        return $user->can('forceDelete_setting::web');
    }
}
