<?php

namespace App\Http\Controllers;

use App\Services\AboutService;
use App\Services\SeoService;
use App\Services\SettingService;

class AboutController extends Controller
{

    private $serviceAbout;
    private $serviceSetting;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        AboutService $serviceAbout,
        SettingService $serviceSetting,
        SeoService $serviceSeo
    )
    {

        $this->serviceAbout = $serviceAbout;
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
        $about = $this->serviceAbout->first();
        $setting = $this->serviceSetting->first();
        $seo = $this->serviceSeo->getSeo();
        return view('site/pages/about', compact(
            'setting',
            'about',
            'seo'
        ));
    }
}
