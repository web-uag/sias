<?php

namespace App\Policies;

use App\Models\Bolsa;
use App\Models\Conta;
use App\Models\Programa;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Ramsey\Uuid\Type\Integer;


class BolsaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {

    }
    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewBolsasProjeto(User $user)
    {
        return \Auth::user()->tipo_usuario == 3;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return \Auth::user()->tipo_usuario == 3;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Bolsa  $bolsa
     * @return mixed
     */
    public function update(User $user, Bolsa $bolsa)
    {
        return \Auth::user()->tipo_usuario == 3;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Bolsa  $bolsa
     * @return mixed
     */
    public function delete(User $user, Bolsa $bolsa)
    {
        return \Auth::user()->tipo_usuario == 3;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Bolsa  $bolsa
     * @return mixed
     */
    public function restore(User $user, Bolsa $bolsa)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Bolsa  $bolsa
     * @return mixed
     */
    public function forceDelete(User $user, Bolsa $bolsa)
    {
        //
    }
}
