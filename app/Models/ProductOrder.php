<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    public $timestamps = false;
    protected $table = 'product_order';

    protected $fillable = [
        'order_id', 'product_id', 'quantity', 'subtotal'
    ];
}