<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    public $table = 'seo';

    protected $fillable = [
        'title', 'description', 'path', 'image', 'keywords', 'order', 'status'
    ];
}
