<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\OrderDetail;
class Order extends Model
{
    use HasFactory;
    public function users(){
       return $this->belongsTo(User::class,'user_id','id');
    }
    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class,'id','order_id');
    }
}
