<?php

namespace App\Http\Controllers;

use App\Services\BannerService;
use App\Services\ProductService;
use App\Services\SeoService;
use App\Services\SettingService;
use App\Services\HomeProductService;
use App\Services\CategoryService;

class HomeController extends Controller
{

    private $serviceBanner;
    private $serviceSetting;
    private $serviceSeo;
    private $serviceProduct;
    private $serviceHomeProduct;
    private $serviceCategory;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        BannerService $serviceBanner,
        SettingService $serviceSetting,
        SeoService $serviceSeo,
        ProductService $serviceProduct,
        HomeProductService $serviceHomeProduct,
        CategoryService $serviceCategory
    ) {

        $this->serviceBanner = $serviceBanner;
        $this->serviceSetting = $serviceSetting;
        $this->serviceSeo = $serviceSeo;
        $this->serviceProduct = $serviceProduct;
        $this->serviceHomeProduct = $serviceHomeProduct;
        $this->serviceCategory = $serviceCategory;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banner = $this->serviceBanner->first();
        $setting = $this->serviceSetting->first();
        $seo = $this->serviceSeo->getSeo();
        $products = $this->serviceProduct->all();
        $categories = $this->serviceCategory->all();
        $home_products = $this->serviceHomeProduct->all();
        return view('site/pages/home', compact(
            'setting',
            'banner',
            'seo',
            'products',
            'home_products',
            'categories'
        ));
    }
}
