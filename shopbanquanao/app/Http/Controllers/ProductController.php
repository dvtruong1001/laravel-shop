<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function home()
    {
        $hot_products = Product::where("category_linker_id", 3)->orderBy("product_id", "desc")->limit(4)->get();
        $new_products = Product::where("category_linker_id", 1)->orderBy("product_id", "desc")->limit(4)->get();
        $top_sell_products = Product::where("category_linker_id", 2)->orderBy("product_id", "desc")->limit(4)->get();


        $products = Product::all();
        return view("home", [
            "hot_products" => $hot_products,
            "new_products" => $new_products,
            "top_sell_products" => $top_sell_products
        ]);
    }
}
