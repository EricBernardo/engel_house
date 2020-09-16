<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{

    protected $table = 'subcategories';

    protected $fillable = [
        'category_id', 'slug', 'title', 'order', 'status',
    ];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
