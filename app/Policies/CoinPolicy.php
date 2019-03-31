<?php

namespace App\Policies;

use App\User;
use App\Coin;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoinPolicy
{
    use HandlesAuthorization;
    /**
     * Determine whether the user can update the coin.
     *
     * @param  \App\User  $user
     * @param  \App\Coin  $coin
     * @return mixed
     */
    public function update(User $user, Coin $coin)
    {
        return $coin->owner_id == $user->id;
    }

   
}
