<?php

namespace App\Http\Controllers;

use App\Services\BannerService;
use App\Services\ProductService;
use App\Services\SeoService;
use App\Services\SettingService;
use App\Services\HomeProductService;

class HomeController extends Controller
{

    private $serviceBanner;
    private $serviceSetting;
    private $serviceSeo;
    private $serviceProduct;
    private $serviceHomeProduct;

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
        HomeProductService $serviceHomeProduct
    ) {

        $this->serviceBanner = $serviceBanner;
        $this->serviceSetting = $serviceSetting;
        $this->serviceSeo = $serviceSeo;
        $this->serviceProduct = $serviceProduct;
        $this->serviceHomeProduct = $serviceHomeProduct;
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
        $home_products = $this->serviceHomeProduct->all();
        return view('site/pages/home', compact(
            'setting',
            'banner',
            'seo',
            'products',
            'home_products'
        ));
    }
}
