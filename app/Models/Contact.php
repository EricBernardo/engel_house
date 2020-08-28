<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'title', 'subtitle', 'description', 'image', 'image_mobile', 'order', 'status',
    ];
}
