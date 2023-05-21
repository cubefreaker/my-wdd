<?php

namespace App\Policies;

use App\Models\UndanganGroup;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class UndanganGroupPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('View Undangan Group');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, UndanganGroup $undanganGroup): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('Create Undangan Group');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, UndanganGroup $undanganGroup): bool
    {
        return $user->hasPermissionTo('Update Undangan Group');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, UndanganGroup $undanganGroup): bool
    {
        return $user->hasPermissionTo('Delete Undangan Group');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, UndanganGroup $undanganGroup): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, UndanganGroup $undanganGroup): bool
    {
        return false;
    }
}
