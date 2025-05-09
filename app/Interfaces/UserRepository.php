<?php

namespace App\Interfaces;

interface UserRepository
{

   public function createUser(array $user);

   public function  findUserByEmail(string $email);

}
