<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\LeadService;

class LeadController extends Controller
{

    private $service;

    public function __construct(LeadService $service)
    {
        $this->middleware('auth');
        $this->service = $service;
    }

    public function index()
    {
        $items = $this->service->paginate();
        return view('admin/pages/lead/index', compact('items'));
    }

    public function show($id)
    {
        $item = $this->service->find($id);
        return view('admin/pages/lead/show', compact('item'));
    }
}
