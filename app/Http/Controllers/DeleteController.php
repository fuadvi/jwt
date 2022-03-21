<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteController extends Controller
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
            $request->user()->delete();
            return response()->json(
                [
                    'status' => "success",
                    'response_message' => "user berhasil di hapus",
                ]
            );

        } catch (\Throwable $th) {
            return response()->json(
                [
                    'status' => "error",
                    'response_message' => $th->getMessage(),
                ],
                500
            );
        }
    }
}
