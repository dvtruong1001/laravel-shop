<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function getProductInfo(Request $request) {
        $product_id = $request->product_id;

        $product = Product::where("product_id", $product_id)->first();
        if(!$product) {
            return response()->json([
                "message" => "Khong tim thay san pham",
                "status" => 404
                ], 200);
        }

        $group_product = Product::where("product_group", "=", $product->product_group)->where("product_id", "!=" , $product_id)->get();
        return response()->json([
            "message"=> "Lay thong tin san pham thanh cong",
            "status" => 200,
            "product_data" => $product->toArray(),
            "group_product" => $group_product->toArray()
            ],200);
    }

    
}
