<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected $fillable = [
        'id','name'
    ];
    protected $primaryKey = 'id';
    protected $table = 'categories';
    protected $timestamp = true;
    public function product(){
        return $this->hasMany(Product::class,'category_id','id');
    }
}
