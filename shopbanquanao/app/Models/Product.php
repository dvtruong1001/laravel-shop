<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = "product_id";

    public $incrementing = true;

    protected $keyType = "int";

    protected $fillable = [
        'product_name',
        'product_des',
        'product_price',
        'product_status',
        'product_count',
        'product_img',
        'product_lg_img'
    ];

}
