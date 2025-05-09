<?php

namespace App\Interfaces;

use App\Models\User;

class UserRepositoryImpl implements UserRepository
{


    public function createUser(array $user)
    {
       return User::create($user);
    }

    public function findUserByEmail(string $email)
    {
        User::where('email', $email)->first();
    }

}
