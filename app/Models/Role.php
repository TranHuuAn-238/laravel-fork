<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $fillable = [
        'name_role',
        'description',
        'status',
    ];

    public function listUsers()
    {
        return $this->belongsToMany(ListUser::class, 'role_user', 'role_id', 'user_id');
    }
}
