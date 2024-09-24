<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartHistory;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CartController extends Controller
{
    //
    public function getCartByOwner(Request $request)
    {
        $user_token = $request->token;

        $cart = Cart::where("cart_owner", $user_token)->get();
        if (!$cart) {
            return response()->json([
                "message" => "Khong co gio hang nao",
                "status" => "error"
            ], 200);
        }

        return response()->json([
            "status" => "success",
            "data" => $cart->toArray()
        ]);
    }

    function insertToCart(Request $request)
    {

        $user_token = $request->token;
        if (!$user_token) {
            return response()->json([
                "message" => "Vui lòng đăng nhập để tiếp tục mua hàng",
                "status" => "error"
            ], 401);
        }

        if (strlen($user_token) < 50) {
            return response()->json([
                "message" => "Vui lòng đăng nhập để tiếp tục mua hàng",
                "status" => "error"
            ], 401);
        }

        $cart_count = $request->cart_count ?? 1;
        $product_size = $request->product_size ?? "S";



        $cart = Cart::where("cart_owner", $user_token)->where("cart_status")->get();
        if (!$cart) {

            Cart::insert([
                "cart_owner" => $user_token
            ]);
        }

        $cart = Cart::where("cart_owner", $user_token)->where("cart_status")->get();

        $product_id = $request->product_id;
        $product = Product::where("product_id", $product_id)->get();
        if (!$product) {
            return response()->json([
                "message" => "Sản phẩm không tồn tại",
                "status" => 404
            ], 200);
        }

        Cart::insert([
            "product_id" => $product_id,
            "cart_owner" => $user_token,
            "cart_count" => $cart_count,
            "product_size" => $product_size,
        ]);

        return response()->json([
            "message" => "Them vao gio hang thanh cong",
            "status" => 200
        ], 200);

    }

    function cartRemove(Request $request)
    {
        $user_token = $request->user_token;
        $cart_id = $request->cart_id;

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

        $carts = Cart::where("cart_owner", $user_token)->where("cart_id", $cart_id)->first();
        if ($carts->count() <= 0) {
            return response()->json([
                "message" => "Sản phẩm không tồn tại trong giỏ hàng của bạn",
                "status" => "error"
            ], 400);
        }

        $carts->delete();
        return response()->json([
            "message" => "Xóa thành công",
            "status" => "success"
        ], 200);

    }


    public function cartConfirm(Request $request)
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

        $fullname = $request->fullname;
        $email = $request->email;
        $numberphone = $request->numberphone;
        $tinh = $request->tinh;
        $huyen = $request->huyen;
        $phuong = $request->phuong;
        $otherlocation = $request->otherlocation;
        $notescart = $request->notescart;

        $tinh_code = $request->tinh_code;
        $huyen_code = $request->huyen_code;
        $phuong_code = $request->phuong_code;

        User::where("user_token", $user_token)->update([
            "user_full_name" => $fullname,
            "user_email" => $email,
            "user_number_phone" => $numberphone,
            "user_province_location" => $tinh_code,
            "user_district_location" => $huyen_code,
            "user_ward_location" => $phuong_code,
            "user_other_location" => $otherlocation
        ]);

        $fulllocation = $fullname . " | " . $numberphone . " | " . $otherlocation . ", " . $phuong . ", " . $huyen . ", " . $tinh . ", " . $notescart;
        $carts = Cart::where("cart_owner", $user_token)
            ->where("cart_status", 0)->get();

        foreach ($carts as $cart) {
            $product = Product::where("product_id", $cart->product_id)->first();
            switch ($cart->product_size) {
                case "S":
                    $product->product_count -= $cart->cart_count;
                    break;
                case "M":
                    $product->product_count_m -= $cart->cart_count;
                    break;
                case "L":
                    $product->product_count_l -= $cart->cart_count;
                    break;
                case "XL":
                    $product->product_count_xl -= $cart->cart_count;
                    break;
            }

            $product->save();
            CartHistory::insert([
                "product_img" => $product->product_img,
                "product_name" => $product->product_name,
                "product_price" => $product->product_price,
                "product_count" => $cart->cart_count,
                "product_size" => $cart->product_size,
                "location" => $fulllocation,
                "owner" => $user_token,
                "cart_token" => Str::random(10)
            ]);

        }





        $updated = Cart::where("cart_owner", $user_token)
            ->where("cart_status", 0)
            ->update([
                'cart_status' => 1,
                'location' => $fulllocation,
            ]);

        if ($updated) {
            return response()->json([
                "message" => "Đặt hàng thành công",
                "status" => "success"
            ], 200);
        } else {
            return response()->json([
                "message" => "Đặt hàng thất bại. Vui lòng thử lại sau",
                "status" => "error"
            ], 400);
        }
    }












    public function setCartHistoryInfo(Request $request)
    {

        $user_token = $request->user_token;
        $cart_id = $request->id;

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

        $cart = CartHistory::where("id", $cart_id)->first();

        if (!$cart) {
            return response()->json([
                "message" => "Don hang khong ton tai",
                "status" => "error"
            ], 404);
        }

        
        $cart->status = (int) $request->e_status;

        $cart->save();

        return response()->json([
            "message" => "Thanh cong",
            "status" => "success",
            "cart" => $cart
        ], 200);


    }

    public function getCartHistoryInfo(Request $request)
    {

        $user_token = $request->user_token;
        $cart_id = $request->id;

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

        $cart = CartHistory::where("id", $cart_id)->first();

        if (!$cart) {
            return response()->json([
                "message" => "Don hang khong ton tai",
                "status" => "error"
            ], 404);
        }

        return response()->json([
            "message" => "Thanh cong",
            "status" => "success",
            "cart" => $cart
        ], 200);


    }


    public function deleteCartHistory(Request $request)
    {

        $user_token = $request->user_token;
        $cart_id = $request->id;

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

        $cart = CartHistory::where("id", $cart_id)->first();

        if (!$cart) {
            return response()->json([
                "message" => "Don hang khong ton tai",
                "status" => "error"
            ], 404);
        }


        $cart->delete();
        return response()->json([
            "message" => "Thanh cong",
            "status" => "success",
            "cart" => $cart
        ], 200);


    }

}
