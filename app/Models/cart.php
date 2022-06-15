<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'product_id',
        'product_qyt'
    ];

    public function products ()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
