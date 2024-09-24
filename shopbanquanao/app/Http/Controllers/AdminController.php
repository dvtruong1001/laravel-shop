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

    public function products(Request $request) {


        $products = Product::all();

        return view("admin.products", ["products"=> $products]);
    }
}
