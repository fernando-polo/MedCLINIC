<?php

namespace App\Policies;

use App\Models\Cita;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CitaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
        return $user->hasRole(['SuperAdmin', 'Admin', 'Doctor']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Cita $cita): bool
    {
        //
        return $user->hasRole(['SuperAdmin', 'Admin', 'Doctor']);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
        return $user->hasRole(['SuperAdmin', 'Admin']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Cita $cita): bool
    {
        //
        return $user->hasRole(['SuperAdmin', 'Admin']);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Cita $cita): bool
    {
        //
        return $user->hasRole(['SuperAdmin', 'Admin']);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Cita $cita): bool
    {
        //
        return $user->hasRole(['SuperAdmin', 'Admin']);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Cita $cita): bool
    {
        //
        return $user->hasRole(['SuperAdmin', 'Admin']);
    }
}
