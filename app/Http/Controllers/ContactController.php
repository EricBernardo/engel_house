<?php

namespace App\Http\Controllers;

use App\Services\ContactService;
use App\Services\SeoService;
use App\Services\SettingService;
use App\Services\CategoryService;

class ContactController extends Controller
{

    private $serviceContact;
    private $serviceSetting;
    private $serviceCategory;
    private $serviceSeo;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        ContactService $serviceContact,
        SettingService $serviceSetting,
        SeoService $serviceSeo,
        CategoryService $serviceCategory
    ) {

        $this->serviceContact = $serviceContact;
        $this->serviceSetting = $serviceSetting;
        $this->serviceSeo = $serviceSeo;
        $this->serviceCategory = $serviceCategory;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contact = $this->serviceContact->first();
        $setting = $this->serviceSetting->first();
        $seo = $this->serviceSeo->getSeo();
        $categories = $this->serviceCategory->all();
        return view('site/pages/contact', compact(
            'setting',
            'contact',
            'seo',
            'categories'
        ));
    }
}
