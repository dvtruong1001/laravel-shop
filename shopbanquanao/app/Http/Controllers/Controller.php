<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product;
use App\Models\Category;
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
        $product = Product::all();

        if ($keywords <> '') {

            $product = Product::where("product_name", "LIKE", "%" . $keywords . "%")
            ->orWhere("product_des", "LIKE", "%" . $keywords . "%")->get();

        }

        if($category <> "") {
            $product = $product->where("category_linker_id", (int)$category);
        }

        
        $hot_products = Product::where("category_linker_id", 3)->orderBy("product_id", "desc")->limit(5)->get();
        
        $categories = Category::all();

        return view("search", ["products" => $product, "hot_products" => $hot_products, "categories" => $categories, "count_product" => $product->count()]);

    }
}
