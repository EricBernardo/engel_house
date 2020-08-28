<?php

namespace App\Http\Controllers;

use App\Services\ContactService;
use App\Services\SeoService;
use App\Services\SettingService;

class ContactController extends Controller
{

    private $serviceContact;
    private $serviceSetting;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        ContactService $serviceContact,
        SettingService $serviceSetting,
        SeoService $serviceSeo
    )
    {

        $this->serviceContact = $serviceContact;
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
        $contact = $this->serviceContact->first();
        $setting = $this->serviceSetting->first();
        $seo = $this->serviceSeo->getSeo();
        return view('site/pages/contact', compact(
            'setting',
            'contact',
            'seo'
        ));
    }
}
