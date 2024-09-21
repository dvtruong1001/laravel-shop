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
        'product_count_m',
        'product_count_l',
        'product_count_xl',
        'product_img',
        'product_lg_img',
        'product_group'
    ];

}
