<?php

namespace App\Http\Controllers;

use App\Services\SeoService;
use App\Services\TeamService;
use App\Services\SettingService;

class TeamController extends Controller
{

    private $serviceTeam;
    private $serviceSetting;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        TeamService $serviceTeam,
        SettingService $serviceSetting,
        SeoService $serviceSeo
    )
    {

        $this->serviceTeam = $serviceTeam;
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
        $teams = $this->serviceTeam->all();
        $setting = $this->serviceSetting->first();
        $seo = $this->serviceSeo->getSeo();
        return view('site/pages/team', compact(
            'setting',
            'teams',
            'seo'
        ));
    }
}
