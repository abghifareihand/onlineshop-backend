<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address_id',
        'transaction_number',
        'shipping_cost',
        'total_cost',
        'subtotal',
        'status',
        'payment_method',
        'payment_va_name',
        'payment_va_number',
        'payment_ewallet',
        'shipping_service',
        'shipping_resi',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
