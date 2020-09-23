<?php

namespace App\Models;

use QCod\ImageUp\HasImageUploads;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{

    use HasImageUploads;

    protected $imagesUploadPath = 'products';

    protected static $imageFields = [
        'image' => [
            'width' => 600,
            'height' => 600,
        ],
        'image_mobile' => [
            'width' => 400,
            'height' => 400,
        ]
    ];

    protected $fillable = [
        'subcategory_id', 'slug', 'title', 'description', 'image', 'image_mobile', 'order', 'status', 'price', 'featured', 'views'
    ];

    protected function imageUploadFilePath($file)
    {
        return Str::of($this->title)->slug('-') . '-' . uniqid(date('HisYmd')) . '.' . $file->getClientOriginalExtension();
    }

    protected function imageMobileUploadFilePath($file)
    {
        return 'mobile-' . Str::of($this->title)->slug('-') . '-' . uniqid(date('HisYmd')) . '.' . $file->getClientOriginalExtension();
    }

    

    public function subcategory()
    {
        return $this->hasOne(SubCategory::class, 'id', 'subcategory_id');
    }
}
