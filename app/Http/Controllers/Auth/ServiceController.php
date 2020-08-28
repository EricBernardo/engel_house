<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequestStore;
use App\Http\Requests\ServiceRequestUpdate;
use App\Services\ServiceService;

class ServiceController extends Controller
{

    private $service;

    public function __construct(ServiceService $service)
    {
        $this->middleware('auth');
        $this->service = $service;
    }

    public function index()
    {
        $items = $this->service->paginate();
        return view('admin/pages/service/index', compact('items'));
    }

    public function create()
    {
        return view('admin/pages/service/create');
    }

    public function store(ServiceRequestStore $request)
    {
        return $this->service->store($request);
    }

    public function show($id)
    {
        $item = $this->service->find($id);
        return view('admin/pages/service/show', compact('item'));
    }

    public function update(ServiceRequestUpdate $request, $id)
    {
        return $this->service->update($request, $id);
    }

    public function delete($id)
    {
        return $this->service->delete($id);
    }
}
