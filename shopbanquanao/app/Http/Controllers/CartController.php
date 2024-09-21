<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function getCartByOwner(Request $request) {
        $user_token = $request->token;

        $cart = Cart::where("cart_owner", $user_token)->get();
        if(!$cart) {
            return response()->json([
                "message" => "Khong co gio hang nao",
                "status" => "error"
            ], 200);
        }

        return response()->json([
            "status" => "success",
            "data"=> $cart->toArray()
        ]);
    }

    function insertToCart(Request $request) {

        $user_token = $request->token;
        if(!$user_token) {
            return response()->json([
                "message"=> "Token khong hop le",
                "status"=> "error"
            ], 401);
        }

        if(strlen($user_token) < 50) {
            return response()->json([
                "message"=> "Token khong hop le",
                "status"=> "error"
            ], 401);
        }

        $cart_count = $request->cart_count ?? 1;
        $product_size = $request->product_size ?? "S";

        

        $cart = Cart::where("cart_owner", $user_token)->where("cart_status")->get();
        if(!$cart) {
            
            Cart::insert([
                "cart_owner"=> $user_token
            ]);
        }

        $cart = Cart::where("cart_owner", $user_token)->where("cart_status")->get();

        $product_id = $request->product_id;
        $product = Product::where("product_id",$product_id)->get();
        if(!$product) {
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
            "message"=> "Them vao gio hang thanh cong",
            "status"=> 200
        ],200);

    }

    
}
