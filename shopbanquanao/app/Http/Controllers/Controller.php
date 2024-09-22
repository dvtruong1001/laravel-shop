<?php

namespace App\Http\Controllers;

use App\Models\CartHistory;
use App\Models\ProductView;
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
        $hot_products = Product::where("is_product_child", 0)->orderBy("view_count", "desc")->limit(10)->get();
        $new_products = Product::where("is_product_child", 0)->orderBy("created_at", "desc")->limit(10)->get();
        $top_sell_products = Product::where("is_product_child", 0)->orderBy("sell_count", "desc")->limit(10)->get();



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
        $byId = $request->byId;
        $product = Product::where('is_product_child', 0)
            ->where(function ($query) {
                $query->where('product_count', '>', 0)
                    ->orWhere('product_count_m', '>', 0)
                    ->orWhere('product_count_l', '>', 0)
                    ->orWhere('product_count_xl', '>', 0);
            })
            ->orderByDesc('product_id');

        if ($keywords !== '') {
            $product = $product->where(function ($query) use ($keywords) {
                $query->where('product_name', 'LIKE', '%' . $keywords . '%')
                    ->orWhere('product_des', 'LIKE', '%' . $keywords . '%');
            });
        }
        

        if ($category <> "") {
            $product = $product->where("category_linker_id", (int) $category);
        }

        if($byId <> '') {
            $product = Product::where("product_id", (int) $byId);
        }
        $product = $product->get();


        $page = $request->page ?? 1;
        $view_products = [];
        $hot_products = Product::where("is_product_child", 0)->orderBy("view_count", "desc")->limit(10)->get();
        if ($request->input("authenticatedUser")) {
            $view_product = ProductView::where("view_by_token", $request->input("authenticatedUser")->user_token)->orderBy("id", "desc")->get();

            foreach ($view_product as $value) {
                $view_products[] = Product::where("product_id", $value->product_id)->first();
            }
        }

        $count_product = $product->count();
        $product = $product->skip(($page - 1) * 6)->take(6);
        $categories = Category::all();

        return view("search", ["products" => $product, "hot_products" => $hot_products, "categories" => $categories, "count_product" => $count_product, "view_product" => $view_products]);

    }

    public function shoppingCart(Request $request)
    {

        $history = CartHistory::where("owner", $request->input("authenticatedUser")->user_token)->orderBy("id","desc")->take(20)->get();


        $carts = Cart::where("cart_owner", $request->input("authenticatedUser")->user_token)->where("cart_status", 0)->get();
        $products = [];
        foreach ($carts as $cart) {
            $products[] = array(
                "product" => Product::where("product_id", $cart->product_id)->first(),
                "cart" => $cart
            );

        }
        return view("shopping-cart", ["products" => $products, "history" => $history]);
    }
}
