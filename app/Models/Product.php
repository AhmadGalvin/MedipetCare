<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'clinic_id', 'name', 'category', 'price', 'stock'
    ];

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }
}