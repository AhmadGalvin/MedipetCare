<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'clinic_id', 'order_date', 'total_price'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_order')
                    ->withPivot('quantity', 'subtotal');
    }
}