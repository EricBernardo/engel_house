<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id', 'slug', 'title', 'description', 'image', 'image_mobile', 'order', 'status',
    ];
}
