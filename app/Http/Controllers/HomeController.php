<?php

namespace App\Http\Controllers;

use App\Services\BannerService;
use App\Services\HomeProductService;
use App\Services\SeoService;
use App\Services\ServiceService;
use App\Services\SettingService;

class HomeController extends Controller
{

    private $serviceService;
    private $serviceBanner;
    private $serviceSetting;
    private $serviceSeo;
    private $serviceHomeProduct;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        ServiceService $serviceService,
        BannerService $serviceBanner,
        SettingService $serviceSetting,
        SeoService $serviceSeo,
        HomeProductService $serviceHomeProduct
    ) {

        $this->serviceService = $serviceService;
        $this->serviceBanner = $serviceBanner;
        $this->serviceSetting = $serviceSetting;
        $this->serviceSeo = $serviceSeo;
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
        $services = $this->serviceService->all();
        $seo = $this->serviceSeo->getSeo();
        $home_products = $this->serviceHomeProduct->all();
        return view('site/pages/home', compact(
            'setting',
            'services',
            'banner',
            'seo',
            'home_products'
        ));
    }
}
