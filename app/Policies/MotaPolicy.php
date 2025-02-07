<?php

namespace App\Policies;

use App\Models\Cliente;
use App\Models\Mota;
use App\Models\User;
use Illuminate\Auth\Access\Response;

use function PHPUnit\Framework\isEmpty;

class MotaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Mota $mota): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        $cliente = Cliente::where('user_id', '=', $user->id)->get();

        return sizeof($cliente) == 0;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Mota $mota): bool
    {
        $cliente = Cliente::where('user_id', '=', $user->id)->get();

        return sizeof($cliente) == 0;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Mota $mota): bool
    {
        $cliente = Cliente::where('user_id', '=', $user->id)->get();

        return sizeof($cliente) == 0;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Mota $mota): bool
    {
        $cliente = Cliente::where('user_id', '=', $user->id)->get();

        return sizeof($cliente) == 0;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Mota $mota): bool
    {
        $cliente = Cliente::where('user_id', '=', $user->id)->get();

        return sizeof($cliente) == 0;
    }
}
