<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected $fillable = [
        'order_date','delivery_date','total_amount','email','password',
    ];
    protected $primaryKey = 'id';
    protected $table = 'orderdetail';
    protected $timestamp = true;

    public function product(){
        return $this->belongsToMany(Product::class, 'orderdetail', 'order_id', 'product_id');
    }
    
    public function order(){
        return $this->belongsToMany(Order::class, 'orderdetail', 'product_id', 'order_id');
    }
}
