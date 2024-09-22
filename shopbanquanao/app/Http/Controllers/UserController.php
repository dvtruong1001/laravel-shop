<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //
    public function login(Request $request)
    {

        $users = User::where("username", "=", $request->username)->where("password", md5($request->password))->first();
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

    public function register(Request $request)
    {
        $fullname = $request->fullname;
        $email = $request->email;
        $numberphone = $request->numberphone;
        $username = $request->username;
        $password = $request->password;

        $users = User::where("username", $username)->get();
        if($users->count() > 0) {
            return response()->json([
                "message" => "Tên tài khoản này đã được đăng ký trước đó",
                "status" => "error"
            ], 401);
        }

        $token = Str::random(50);
        User::insert([
            "user_full_name" => $fullname,
            "user_email"=> $email,
            "user_number_phone"=> $numberphone,
            "username"=> $username,
            "password"=> md5($password),
            "user_token" => $token
        ]);

        return response()->json([
            "status" => "success",
            "token" => $token
        ], 200);
    }
}
