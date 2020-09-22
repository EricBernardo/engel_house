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
            'width' => 400,
            'height' => 600,
        ],
        'image_mobile' => [
            'width' => 300,
            'height' => 400,
        ]
    ];

    protected function imageUploadFilePath($file)
    {
        return Str::of($this->title)->slug('-') . '-' . uniqid(date('HisYmd')) . '.' . $file->getClientOriginalExtension();
    }

    protected function imageMobileUploadFilePath($file)
    {
        return 'mobile-' . Str::of($this->title)->slug('-') . '-' . uniqid(date('HisYmd')) . '.' . $file->getClientOriginalExtension();
    }

    protected $fillable = [
        'subcategory_id', 'slug', 'title', 'description', 'image', 'image_mobile', 'order', 'status', 'price'
    ];

    public function subcategory()
    {
        return $this->hasOne(SubCategory::class, 'id', 'subcategory_id');
    }
}
