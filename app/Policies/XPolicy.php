<?php

namespace App\Policies;

use App\Models\User;
use App\Models\x;
use Illuminate\Auth\Access\HandlesAuthorization;

class XPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\x  $x
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, x $x)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\x  $x
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, x $x)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\x  $x
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, x $x)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\x  $x
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, x $x)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\x  $x
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, x $x)
    {
        //
    }
}
