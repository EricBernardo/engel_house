<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\SeoRequestStore;
use App\Http\Requests\SeoRequestUpdate;
use App\Services\SeoService;

class SeoController extends Controller
{

    private $service;

    public function __construct(SeoService $service)
    {
        $this->middleware('auth');
        $this->service = $service;
    }

    public function index()
    {
        $items = $this->service->paginate();
        return view('admin/pages/seo/index', compact('items'));
    }

    public function create()
    {
        return view('admin/pages/seo/create');
    }

    public function store(SeoRequestStore $request)
    {
        return $this->service->store($request);
    }

    public function show($id)
    {
        $item = $this->service->find($id);
        return view('admin/pages/seo/show', compact('item'));
    }

    public function update(SeoRequestUpdate $request, $id)
    {
        return $this->service->update($request, $id);
    }

    public function delete($id)
    {
        return $this->service->delete($id);
    }
}
