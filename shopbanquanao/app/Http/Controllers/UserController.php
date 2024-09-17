<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login(Request $request)
    {

        $users = User::where(column: "username", $request->username)->where("password", md5($request->password))->first();
        if (!$users) {
            return response()->json([
                "status" => "error",
                "message" => "Tai khoan hoac mat khau khong chinh xac"
            ], 401);
        }

        return response()->json([
            "status" => "success",
            "token" => $users->user_token
        ], 200);
    }
}
