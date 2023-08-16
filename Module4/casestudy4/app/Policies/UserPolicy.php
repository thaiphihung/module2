<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use App\Traits\HasPermissions;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return $user->hasPermission('User_viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user){
        return $user->hasPermission('user_view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->hasPermission('user_create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user,)
    {
        return $user->hasPermission('user_update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user)
    {
        return $user->hasPermission('user_delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user)
    {
        return $user->hasPermission('user_restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user)
    {
        return $user->hasPermission('user_forceDelete');
    }

    public function viewTrash(User $user)
   {
      return $user->hasPermission('user_viewTrash');
      //
   }
}
