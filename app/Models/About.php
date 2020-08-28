<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'title', 'description', 'image', 'image_mobile', 'link_youtube', 'order', 'status',
    ];
}
