<?php

namespace App\Services;

use App\Dtos\RegisterUserDto;
use App\Interfaces\UserRepository;

class AuthService
{

    public function __construct(Private UserRepository $userRepository)
    {
    }

    public function register(RegisterUserDto $request)
    {
       if($this->userRepository->findUserByEmail($request->getEmail())){
           throw new \Exception("usuario ya existe");
       }

       $user = $this->userRepository->createUser(
           [
               'email' => $request->getEmail(),
               'password' => $request->getPassword(),
               'name' => $request->getName(),
           ]
       );
       return $user;
    }

}
