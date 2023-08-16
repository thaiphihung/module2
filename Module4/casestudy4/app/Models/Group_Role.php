<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\Attributes\Group;

class Group_Role extends Model
{
    use HasFactory;
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected $fillable = [
        'group_id','role_id',
    ];
    protected $primaryKey = 'id';
    protected $table = 'group_role';
    protected $timestamp = true;

    // public function groups(){
    //     return $this->belongsToMany(Groups::class, 'group_role', 'role_id', 'group_id');
    // }
    
    // public function roles(){
    //     return $this->belongsToMany(Roles::class, 'group_role', 'group_id', 'role_id');
    // }
}
