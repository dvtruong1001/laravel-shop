<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function getCategoryInfo(Request $request)
    {
        $category_id = $request->category_id;

        $category = Category::where("category_id", $category_id)->first();
        if (!$category) {
            return response()->json([
                "message" => "Khong tim thay danh muc",
                "status" => "error"
            ], 200);
        }

        return response()->json([
            "category" => $category,
            "status" => "success"
        ], 200);
    }

    public function setCategoryInfo(Request $request)
    {
        $user_token = $request->user_token;

        if (!$user_token) {
            return response()->json([
                "message" => "Bạn chưa đăng nhập",
                "status" => "error"
            ], 401);
        }

        if (strlen($user_token) < 50) {
            return response()->json([
                "message" => "Bạn chưa đăng nhập",
                "status" => "error"
            ], 401);
        }

        $user = User::where("user_token", $user_token)->first();
        if (!$user) {
            return response()->json([
                "message" => "Token không hợp lệ",
                "status" => "error"
            ], 401);
        }

        if ($user->level < 1) {
            return response()->json([
                "message" => "Bạn không có quyền làm việc này",
                "status" => "error"
            ], 401);
        }

        $category_id = $request->category_id;

        $category = Category::where("category_id", $category_id)->first();
        if (!$category) {
            return response()->json([
                "message" => "Khong tim thay danh muc",
                "status" => "error"
            ], 404);
        }

        $category->category_name = $request->e_name;
        $category->category_des = $request->e_des;

        $category->save();

        return response()->json([
            "message" => "Thanh cong",
            "status" => "success"
        ], 200);


    }



    public function deleteCategory(Request $request)
    {
        $user_token = $request->user_token;

        if (!$user_token) {
            return response()->json([
                "message" => "Bạn chưa đăng nhập",
                "status" => "error"
            ], 401);
        }

        if (strlen($user_token) < 50) {
            return response()->json([
                "message" => "Bạn chưa đăng nhập",
                "status" => "error"
            ], 401);
        }

        $user = User::where("user_token", $user_token)->first();
        if (!$user) {
            return response()->json([
                "message" => "Token không hợp lệ",
                "status" => "error"
            ], 401);
        }

        if ($user->level < 1) {
            return response()->json([
                "message" => "Bạn không có quyền làm việc này",
                "status" => "error"
            ], 401);
        }

        $category_id = $request->category_id;

        $category = Category::where("category_id", $category_id)->first();
        if (!$category) {
            return response()->json([
                "message" => "Khong tim thay danh muc",
                "status" => "error"
            ], 404);
        }


        $category->delete();

        return response()->json([
            "message" => "Thanh cong",
            "status" => "success"
        ], 200);


    }


    public function addCategory(Request $request)
    {
        $user_token = $request->user_token;

        if (!$user_token) {
            return response()->json([
                "message" => "Bạn chưa đăng nhập",
                "status" => "error"
            ], 401);
        }

        if (strlen($user_token) < 50) {
            return response()->json([
                "message" => "Bạn chưa đăng nhập",
                "status" => "error"
            ], 401);
        }

        $user = User::where("user_token", $user_token)->first();
        if (!$user) {
            return response()->json([
                "message" => "Token không hợp lệ",
                "status" => "error"
            ], 401);
        }

        if ($user->level < 1) {
            return response()->json([
                "message" => "Bạn không có quyền làm việc này",
                "status" => "error"
            ], 401);
        }

        
        Category::insert([
            "category_name" => $request->n_name,
            "category_des" => $request->n_des
        ]);

        return response()->json([
            "message" => "Thanh cong",
            "status" => "success"
        ], 200);


    }
}
