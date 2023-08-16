<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected $fillable = [
        'name','slug','price','description','quantity'
    ];
    protected $primaryKey = 'id';
    protected $table = 'products';
    protected $timestamp = true;
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function order_detail(){
        return $this->belongsToMany(OrderDetail::class,'orderdetail','product_id','order_id');
    }
}
