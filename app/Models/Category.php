<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'slug', 'title', 'order', 'status',
    ];

    public function subcategories()
    {
        return $this->hasMany(SubCategory::class);
    }
}
