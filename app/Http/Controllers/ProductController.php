<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use App\Services\SeoService;
use App\Services\SettingService;

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
        SeoService $serviceSeo
    )
    {

        $this->serviceProduct = $serviceProduct;
        $this->serviceSetting = $serviceSetting;
        $this->serviceSeo = $serviceSeo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = $this->serviceProduct->all();
        $setting = $this->serviceSetting->first();
        $seo = $this->serviceSeo->getSeo();
        return view('site/pages/products', compact(
            'setting',
            'products',
            'seo'
        ));
    }

    public function show($slug)
    {
        $product = $this->serviceProduct->findSlug($slug);
        $setting = $this->serviceSetting->first();        
        $seo = $this->serviceSeo->getSeo();
        
        if($product) {
            $seo['title'] = $product['title'] . ' | Produtos | ' . $setting['name_site'];
            $seo['description'] = $product['description'];
            $seo['image'] = $product['image'];
        }

        return view('site/pages/product_show', compact(
            'setting',
            'product',
            'seo'
        ));
    }
}
