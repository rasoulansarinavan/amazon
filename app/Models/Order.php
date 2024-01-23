<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'user_id');
    }

    public function delivery()
    {
        return $this->belongsTo(delivery::class, 'delivery_id', 'id');
    }
}
