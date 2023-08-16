<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    use HasFactory;
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected $fillable = [
        'name','group_name',
    ];
    protected $primaryKey = 'id';
    protected $table = 'roles';
    protected $timestamp = true;

    public function groups()
    {
        return $this->belongsToMany(Groups::class, 'group_role','group_id','role_id');
    }
}
