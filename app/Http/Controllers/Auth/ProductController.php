<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequestStore;
use App\Http\Requests\ProductRequestUpdate;
use App\Services\ProductService;

class ProductController extends Controller
{

    private $service;

    public function __construct(ProductService $service)
    {
        $this->middleware('auth');
        $this->service = $service;
    }

    public function index()
    {
        $items = $this->service->paginate();
        return view('admin/pages/product/index', compact('items'));
    }

    public function create()
    {
        return view('admin/pages/product/create');
    }

    public function store(ProductRequestStore $request)
    {
        return $this->service->store($request);
    }

    public function show($id)
    {
        $item = $this->service->find($id);
        return view('admin/pages/product/show', compact('item'));
    }

    public function update(ProductRequestUpdate $request, $id)
    {
        return $this->service->update($request, $id);
    }

    public function delete($id)
    {
        return $this->service->delete($id);
    }
}
