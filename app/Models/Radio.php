<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Radio extends Model
{
    use HasFactory;

    protected $table = 'radios';

    protected $fillable = [
        'title',
        'content',
        'link_drive',
        'radio_time'
    ];
}
