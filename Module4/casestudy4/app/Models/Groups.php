<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    use HasFactory;
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected $fillable = [
        'name'
    ];
    protected $primaryKey = 'id';
    protected $table = 'groups';
    protected $timestamp = true;

    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'group_role','group_id','role_id');
    }
    public function users(){
        return $this->hasMany(User::class,'group_id','id');
    }
}
