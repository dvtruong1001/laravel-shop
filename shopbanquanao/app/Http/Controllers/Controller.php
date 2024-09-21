<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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

    public function search(Request $request)
    {
        $keywords = $request->kw;
        $category = $request->cg;
        $product = Product::where("product_count",">", 0)->orWhere("product_count_m",">", 0)->orWhere("product_count_l",">", 0)->orWhere("product_count_xl",">", 0)->orderByDesc("product_id")->get();
        // $product = Product::orderByDesc("product_id")->get();

        if ($keywords <> '') {

            $product = Product::where("product_name", "LIKE", "%" . $keywords . "%")
            ->orWhere("product_des", "LIKE", "%" . $keywords . "%")->get();

        }

        if($category <> "") {
            $product = $product->where("category_linker_id", (int)$category);
        }

        $page = $request->page ?? 1;
        
        $hot_products = Product::where("category_linker_id", 3)->orderBy("product_id", "desc")->limit(5)->get();
        
        $count_product = $product->count();
        $product = $product->skip(($page - 1) * 6)->take(6);
        $categories = Category::all();

        return view("search", ["products" => $product, "hot_products" => $hot_products, "categories" => $categories, "count_product" => $count_product]);

    }

    public function shoppingCart(Request $request) {
        $carts = Cart::where("cart_owner", $request->input("authenticatedUser")->user_token)->get();
        $products = [];
        foreach( $carts as $cart ) {
            $products[] = Array(
                "product" => Product::where("product_id", $cart->product_id)->first(),
                "cart" => $cart
            );

        }
        return view("shopping-cart", ["products"=> $products]);
    }
}
