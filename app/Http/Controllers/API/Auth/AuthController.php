<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Requests\API\Auth\LoginRequest;
use App\Http\Requests\API\Auth\RegisterRequest;
use App\Http\Resources\API\Auth\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends BaseController
{
    public function register(RegisterRequest $request)
    {
        try {
            DB::beginTransaction();

            $user = User::create($request->validated());

            $token = $user->createToken('authToken')->plainTextToken;
            $user->update(['remember_token' => $token]);

            DB::commit();
            return $this->sendResponse(new UserResource($user), 'Usuario registrado con éxito.', [
                'token' => $token
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->sendError($th->getMessage());
        }
    }

    public function login(LoginRequest $request)
    {
        try {
            $user = User::where('email', $request->email)->first();

            if (!$user || !Hash::check($request->password, $user->password)) {
                return $this->sendError('Correo o contraseña inválida, intente de nuevo.');
            }

            $token = $user->createToken('authToken')->plainTextToken;
            $user->update(['remember_token' => $token]);

            return $this->sendResponse(new UserResource($user), 'Bienvenido a mi app.', [
                'token' => $token
            ]);
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage());
        }
    }
}
