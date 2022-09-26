<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListUser extends Model
{
    use HasFactory;

    protected $table = 'list_users';

    protected $attributes = [
        'google_id' => null
    ];

    protected $fillable = [
        'username',
        'google_id',
        'email',
        'password',
        'avatar',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    }

    // public function orders()
    // {
    //     return $this->belongsToMany(Order::class, 'list_user_order', 'user_id', 'order_id');
    // }
    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id');
    }
}
