<?php

namespace App\Http\Controllers;

use App\Services\BannerService;
use App\Services\ProductService;
use App\Services\SeoService;
use App\Services\SettingService;

class HomeController extends Controller
{

    private $serviceBanner;
    private $serviceSetting;
    private $serviceSeo;
    private $serviceProduct;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        BannerService $serviceBanner,
        SettingService $serviceSetting,
        SeoService $serviceSeo,
        ProductService $serviceProduct
    ) {

        $this->serviceBanner = $serviceBanner;
        $this->serviceSetting = $serviceSetting;
        $this->serviceSeo = $serviceSeo;
        $this->serviceProduct = $serviceProduct;
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
        return view('site/pages/home', compact(
            'setting',
            'banner',
            'seo',
            'products'
        ));
    }
}
