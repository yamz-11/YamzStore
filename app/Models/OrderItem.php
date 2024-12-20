<?php

namespace App\Models;

use App\Models\Order;
use App\Models\products;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'unit_amount',
        'total_amount',
    ];

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function products(){
        return $this->belongsTo(Products::class);
    }
}
