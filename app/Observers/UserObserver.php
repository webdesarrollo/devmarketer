<?php

namespace App\Observers;

use App\User;

class UserObserver
{
    /**
     * Listen to the User creating event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function creating(User $user)
    {
      // 'creating' despues de salvar en la base de dçdatos
      $user->api_token = bin2hex(openssl_random_pseudo_bytes(30));
    }

}
