<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RegisterRequest $request)
    {
        try {
            $data = $request->all();
            $data['password'] = Hash::make($request->password);
            $data['gambar'] = $request->file('gambar')->store(
                'assert/users',
                'public'
            );
            $user = User::create($data);

            return response()->json(
                [
                    "status" => 'success',
                    'message' => 'Berhasil Register',
                    'data' => $user
                ]
            );
        } catch (\Exception $th) {

            return response()->json(
                [
                    "status" => 'error',
                    'message' => $th->getMessage(),

                ],500
            );
        }
    }
}
