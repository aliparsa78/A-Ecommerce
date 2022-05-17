<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public function categories()
    {
        return $this->belongsTo(Category::class,'cat_id','id');
    }
    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class,'id','product_id');
    }
}
