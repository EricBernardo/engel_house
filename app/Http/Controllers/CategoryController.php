<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use App\Services\SeoService;
use App\Services\SettingService;
use App\Services\CategoryService;

class CategoryController extends Controller
{

    private $serviceProduct;
    private $serviceSetting;
    private $serviceCategory;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        ProductService $serviceProduct,
        SettingService $serviceSetting,
        CategoryService $serviceCategory,
        SeoService $serviceSeo
    ) {

        $this->serviceProduct = $serviceProduct;
        $this->serviceSetting = $serviceSetting;
        $this->serviceSeo = $serviceSeo;
        $this->serviceCategory = $serviceCategory;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($category_slug, $subcategory_slug = null)
    {

        $products = $this->serviceProduct->all();
        $categories = $this->serviceCategory->all();
        $setting = $this->serviceSetting->first();
        $seo = $this->serviceSeo->getSeo();
        return view('site/pages/categories', compact(
            'setting',
            'products',
            'seo',
            'categories',
            'category_slug',
            'subcategory_slug'
        ));
    }
}
