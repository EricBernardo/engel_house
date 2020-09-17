<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use App\Services\SeoService;
use App\Services\SettingService;
use App\Services\CategoryService;

class ProductController extends Controller
{

    private $serviceProduct;
    private $serviceSetting;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        ProductService $serviceProduct,
        SettingService $serviceSetting,
        SeoService $serviceSeo,
        CategoryService $serviceCategory
    ) {

        $this->serviceProduct = $serviceProduct;
        $this->serviceSetting = $serviceSetting;
        $this->serviceSeo = $serviceSeo;
        $this->serviceCategory = $serviceCategory;
    }

    public function show($slug)
    {
        $product = $this->serviceProduct->findSlug($slug);
        $related_products = $this->serviceProduct->related($product);

        $setting = $this->serviceSetting->first();
        $seo = $this->serviceSeo->getSeo();
        $categories = $this->serviceCategory->all();

        if ($product) {
            $seo['title'] = $product['title'] . ' | Produtos | ' . $setting['name_site'];
            $seo['description'] = $product['description'];
            $seo['image'] = $product['image'];
        }

        return view('site/pages/product_show', compact(
            'setting',
            'product',
            'seo',
            'related_products',
            'categories'
        ));
    }
}
