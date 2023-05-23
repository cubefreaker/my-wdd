<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserUndanganDetail;
use Illuminate\Auth\Access\Response;

class UserUndanganDetailPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('View User Undangan');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, UserUndanganDetail $userUndanganDetail): bool
    {
        return $user->hasPermissionTo('View User Undangan');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('Create User Undangan');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, UserUndanganDetail $userUndanganDetail): bool
    {
        return $user->hasPermissionTo('Update User Undangan');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, UserUndanganDetail $userUndanganDetail): bool
    {
        return $user->hasPermissionTo('Delete User Undangan');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, UserUndanganDetail $userUndanganDetail): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, UserUndanganDetail $userUndanganDetail): bool
    {
        return false;
    }
}
