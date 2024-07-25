<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiLoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request): JsonResponse
    {
        $request->authenticate();

        return response()->json([
            'message' => 'Login successful',
            'user' => $request->user(),
            'token' => $request->user()->createToken('api-access')->plainTextToken,
        ]);
    }
}
