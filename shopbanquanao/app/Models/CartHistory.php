<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartHistory extends Model
{
    use HasFactory;

    protected $table = "cart_history";

    protected $fillable = [
        "product_img",
        "product_name",
        "product_price",
        "product_count",
        'product_size',
        "owner"
    ];
}
