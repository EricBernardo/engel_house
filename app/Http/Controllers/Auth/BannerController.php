<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequestStore;
use App\Http\Requests\BannerRequestUpdate;
use App\Services\BannerService;

class BannerController extends Controller
{

    private $service;

    public function __construct(BannerService $service)
    {
        $this->middleware('auth');
        $this->service = $service;
    }

    public function index()
    {
        $items = $this->service->paginate();
        return view('admin/pages/banner/index', compact('items'));
    }

    public function create()
    {
        return view('admin/pages/banner/create');
    }

    public function store(BannerRequestStore $request)
    {
        return $this->service->store($request);
    }

    public function show($id)
    {
        $item = $this->service->find($id);
        return view('admin/pages/banner/show', compact('item'));
    }

    public function update(BannerRequestUpdate $request, $id)
    {
        return $this->service->update($request, $id);
    }

    public function delete($id)
    {
        return $this->service->delete($id);
    }
}
