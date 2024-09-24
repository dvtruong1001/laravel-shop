<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductView;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function setProductInfo(Request $request)
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
                "message"=> "Token không hợp lệ",
                "status"=> "error"
            ],401);
        }

        if ($user->level < 1) {
            return response()->json([
                "message"=> "Bạn không có quyền làm việc này",
                "status"=> "error"
            ],401);
        }

        $product_id = $request->product_id;

        $product = Product::where("product_id", $product_id)->first();
        if (!$product) {
            return response()->json([
                "message" => "Khong tim thay san pham",
                "status" => 404
            ], 200);
        }


    }
    public function getProductInfo(Request $request)
    {
        $product_id = $request->product_id;

        $product = Product::where("product_id", $product_id)->first();
        if (!$product) {
            return response()->json([
                "message" => "Khong tim thay san pham",
                "status" => 404
            ], 200);
        }

        $group_product = Product::where("product_group", "=", $product->product_group)->where("product_id", "!=", $product_id)->get();

        Product::where("product_id", $product->product_id)->update(["view_count" => $product->view_count + 1]);
        if ($request->user_token) {
            if (strlen($request->user_token) >= 50) {
                ProductView::insert(["view_by_token" => $request->user_token, "product_id" => $product_id]);
            }
        }


        return response()->json([
            "message" => "Lay thong tin san pham thanh cong",
            "status" => 200,
            "product_data" => $product->toArray(),
            "group_product" => $group_product->toArray()
        ], 200);
    }


}
