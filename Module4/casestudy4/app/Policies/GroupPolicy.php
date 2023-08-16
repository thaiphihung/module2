<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Groups;
use Illuminate\Auth\Access\Response;

class GroupPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return $user->hasPermission('groups_viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Groups $group)
    {
        return $user->hasPermission('groups_view');
    }
        //
    

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->hasPermission('groups_create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Groups $group)
    {
        return $user->hasPermission('groups_update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Groups $group)
    {
        return $user->hasPermission('groups_delete');
        
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Groups $group)
    {
        return $user->hasPermission('groups_restore');

    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, User $model)
    {
        return $user->hasPermission('groups_forceDelete');
    }

    public function viewTrash(User $user)
    {
        return $user->hasPermission('group_viewTrash');
        //
    }
}
