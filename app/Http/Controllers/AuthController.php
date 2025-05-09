<?php

namespace App\Http\Controllers;

use App\Dtos\RegisterUserDto;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function __construct(private AuthService $authService)
    {

    }
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            $token = $user->createToken('task-app')->plainTextToken;
            return response()->json(
                [
                    'token' => $token,
                    'message'=>'login exitoso'
                ], 200);
        }
       return response()->json(['error' => 'Unauthorised'], 401);
    }

    public function register(RegisterRequest $request)
    {
        try {
            $dto = new RegisterUserDto();
            $dto->setName($request->input('name'));
            $dto->setEmail($request->input('email'));
            $dto->setPassword($request->input('password'));
            $dto->setPasswordConfirmation($request->input('password_confirmation'));

          $response =  $this->authService->register($dto);
          return response()->json(['success' => $response], 201);
        }catch (\Exception $e){
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }



}
