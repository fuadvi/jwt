<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(LoginRequest $request)
    {
        try {
            $user = User::where('email', $request->email)->first();

            if (!$token = auth()->attempt($request->only(['email', 'password']))) {
                return response()->json(['error' => 'email atau password salah'], 401);
            }

            return response()->json(
                [
                    'message' => "user berhasil login",
                    "data" =>  [
                        "token" => $token,
                        "user" => $user
                    ]
                ]
            );
        } catch (\Exception $th) {
            return response()->json(
                [
                    'status' => 'error',
                    'message' => $th->getMessage(),
                ],500
            );
        }
    }
}
