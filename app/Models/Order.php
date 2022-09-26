<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name_song',
        'link_song',
        'message',
        'status',
    ];

    // public function listUsers()
    // {
    //     return $this->belongsToMany(ListUser::class, 'list_user_order', 'user_id', 'order_id');
    // }
}
