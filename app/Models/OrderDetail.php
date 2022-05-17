<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Product;

class OrderDetail extends Model
{
    use HasFactory;
    protected $illable = [
        'order_id','product_id'
    ];
    public function orders()
    {
        return $this->belongsTo(Order::class,'order_id','id');
    }
    public function products()
    {
        return $this->belongsTo(Product::class,'product_id','id');  
    }
}
