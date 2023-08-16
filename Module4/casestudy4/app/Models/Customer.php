<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Authenticatable
{
    use HasFactory,SoftDeletes;
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected $fillable = [
        'id','name','phone','address','email','password','image'
    ];
    protected $primaryKey = 'id';
    protected $table = 'customers';
    protected $timestamp = true;
    public function order(){
        return $this->hasMany(Order::class,'customer_id','id');
    }
}
