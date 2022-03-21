<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        try {
            auth()->logout();


            return response()->json(
                [
                    'status' => "success",
                    'response_message' => "user berhasil keluar",
                ]
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'status' => "error",
                    'response_message' => "Unauthorized",
                ],401
            );
        }
    }
}
