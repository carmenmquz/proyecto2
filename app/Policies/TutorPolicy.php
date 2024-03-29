<?php

namespace App\Policies;

use App\Models\Tutor;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TutorPolicy
{
    use HandlesAuthorization;


        /**
     * Perform pre-authorization checks.
     *
     * @param  \App\Models\User  $user
     * @param  string  $ability
     * @return void|bool
     */
    public function before(User $user, $ability)
    {
        if ($user->id === 1) return true;
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Tutor $tutor)
    {
        if ($user->id === 1) return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        if ($user->id === 1) return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Tutor $tutor)
    {
        return $user->id === $tutor->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Tutor $tutor)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Tutor $tutor)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Tutor $tutor)
    {
        //
    }
}
