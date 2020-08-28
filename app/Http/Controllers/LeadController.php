<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeadRequestStore;
use App\Services\LeadService;

class LeadController extends Controller
{

    private $service;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        LeadService $service
    ) {
        $this->service = $service;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(LeadRequestStore $request)
    {
        return $this->service->store($request);
    }
}
