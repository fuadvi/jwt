<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateUserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UpdateRequest $request)
    {
       try {
            $user = $request->user();
            $user->update($request->all());

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
                ],
                500
            );
       }

    }
}
