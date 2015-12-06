<?php
namespace LegendsRising\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use LegendsRising\Http\Requests;
use Tymon\JWTAuth\Exceptions\JWTException;
use Log;

class AuthController extends Controller
{
    public function signIn(Request $request)
    {
        $credentials = $request->only('username', 'password');
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        return response()->json(compact('token'));
    }
}