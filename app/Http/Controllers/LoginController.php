<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginValidation;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function __invoke(LoginValidation $request)
    {

        $user = User::where('email', $request->email)->first();
        //dd($user);
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        //dd($user->createToken('Login')->plainTextToken);
        return [
            'token' => $user->createToken('Login')->plainTextToken,
        ];

    }
}
