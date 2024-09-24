<?php

namespace App\Http\Controllers;

use App\Models\CartHistory;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminController extends Controller
{
    //
    public function index(Request $request)
    {

        $user = $request->input("authenticatedUser");

        $new_order = Product::where("created_at", Carbon::today())->get();
        $bounce_product = CartHistory::where("created_at", Carbon::today())->get();

        if ($new_order->count() == 0) {
            $bounce_rate = 0;
        } else {
            $bounce_rate = $bounce_product->count() / $new_order->count() * 100;
        }

        $new_user = User::where("created_at", Carbon::today())->get();

        $cart_waiting = CartHistory::where("status", 0)->get();
        return view(
            "admin.index",
            [
                "new_order" => $new_order->count(),
                "bounce_rate" => $bounce_rate,
                "new_user" => $new_user->count(),
                "cart_waiting" => $cart_waiting->count()
            ]
        );
    }

    public function products(Request $request)
    {

        $products = [];
        $_products = Product::orderByDesc("product_id")->get();
        foreach ($_products as $product) {
            $products[] = [
                "product" => $product,
                "category" => Category::where("category_id", $product->category_linker_id)->first(),
            ];
        }

        $catgories = Category::all();

        return view("admin.products", [
            "products" => $products,
            "catgories" => $catgories
        ]);
    }

    public function category(Request $request)
    {

        $catgories = [];
        $_catgories = Category::orderByDesc("category_id")->get();

        foreach ($_catgories as $category) {
            $catgories[] = [
                "category"=> $category,
                "total_product" => Product::where("category_linker_id", $category->category_id)->get()->count(),
            ];
        }


        return view("admin.category", [
            
            "catgories" => $catgories
        ]);
    }


    public function cart(Request $request) {
        $_carts = CartHistory::orderByDesc("id")->get();
        $carts = [];
        foreach ($_carts as $cart) {
            $carts[] = [
                "user" => User::where("user_token", $cart->owner)->first(),
                "cart" => $cart
            ];
        }
        
        return view("admin.cart", ["carts" => $carts]);
    }
}
