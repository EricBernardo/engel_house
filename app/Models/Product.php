<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'subcategory_id', 'slug', 'title', 'description', 'image', 'image_mobile', 'order', 'status', 'price'
    ];

    public function subcategory()
    {
        return $this->hasOne(SubCategory::class, 'id', 'subcategory_id');
    }
}
