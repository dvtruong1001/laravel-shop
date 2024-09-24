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

    public function addProduct(Request $request)
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

        Product::insert([
            "product_name" => $request->n_name,
            "product_des" => $request->n_des,
            "product_price" => $request->n_price,
            "product_count" => $request->n_s,
            "product_count_m" => $request->n_m,
            "product_count_l" => $request->n_l,
            "product_count_xl" => $request->n_xl,
            "category_linker_id" => $request->n_category,
            "product_img" =>  "uploads/" .$request->link_img,
            "product_lg_img" =>  "uploads/" .$request->link_lg_img
        ]);

        return response()->json([
            "message"=> "Thanh cong",
            "status"=> "success"
        ],200);
        
      

    }
    public function deleteProduct(Request $request)
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

        $product_id = $request->product_id;

        $product = Product::where("product_id", $product_id)->first();
        if (!$product) {
            return response()->json([
                "message" => "Khong tim thay san pham",
                "status" => "error"
            ], 404);
        }

        $product->delete();

        return response()->json([
            "message" => "Xoa thanh cong",
            "status" => "success"
        ], 200);
    }
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

        $product_id = $request->product_id;

        $product = Product::where("product_id", $product_id)->first();
        if (!$product) {
            return response()->json([
                "message" => "Khong tim thay san pham",
                "status" => "error"
            ], 404);
        }

        $product->product_name = $request->e_name;
        $product->product_des = $request->e_des;
        $product->product_price = $request->e_price;
        $product->product_count = $request->e_s;
        $product->product_count_m = $request->e_m;
        $product->product_count_l = $request->e_l;
        $product->product_count_xl = $request->e_xl;
        $product->category_linker_id = (int)$request->e_category;


        if($request->e_group != 0) {
            $product->product_group = (int)$request->e_group;
            $product->is_product_child = 1;
        } else {
            $product->product_group = 0;
            $product->is_product_child = 0;
        }

        if ($request->link_img != "") {
            $product->product_img = "uploads/" . $request->link_img;
        }

        if ($request->link_lg_img != "") {
            $product->product_lg_img = "uploads/" . $request->link_lg_img;
        }

        $product->save();

        return response()->json([
            "message" => "Thanh cong",
            "status" => "success"
        ], 200);


    }
    public function getProductInfo(Request $request)
    {
        $product_id = $request->product_id;

        $product = Product::where("product_id", $product_id)->first();
        if (!$product) {
            return response()->json([
                "message" => "Khong tim thay san pham",
                "status" => 404
            ], 404);
        }

        $group_product = Product::where("product_group", "=", $product->product_group)->where("product_id", "!=", $product_id)->get();

        Product::where("product_id", $product->product_id)->update(["view_count" => $product->view_count + 1]);
        if ($request->user_token) {
            if (strlen($request->user_token) >= 50) {
                ProductView::insert(["view_by_token" => $request->user_token, "product_id" => $product_id]);
            }
        }


        $category = Category::where("category_id", $product->category_linker_id)->first();

        return response()->json([
            "message" => "Lay thong tin san pham thanh cong",
            "status" => 200,
            "product_data" => $product->toArray(),
            "group_product" => $group_product->toArray(),
            "category" => $category
        ], 200);
    }


}
