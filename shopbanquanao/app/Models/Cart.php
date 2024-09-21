<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $primaryKey = "cart_id";

    public $incrementing = true;

    protected $keyType = "int";


    const CREATED_AT = 'create_at';

    protected $fillable = [
        'cart_owner',
        'cart_status',
        'product_id',
        'cart_count',
        'product_size'
    ];

    
}
