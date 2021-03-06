<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequestStore;
use App\Http\Requests\ProductRequestUpdate;
use App\Services\ProductService;
use App\Services\CategoryService;

class ProductController extends Controller
{

    private $service;
    private $serviceCategory;

    public function __construct(ProductService $service, CategoryService $serviceCategory)
    {
        $this->middleware('auth');
        $this->service = $service;
        $this->serviceCategory = $serviceCategory;
    }

    public function index()
    {
        $items = $this->service->paginate();
        return view('admin/pages/product/index', compact('items'));
    }

    public function create()
    {
        $categories = $this->serviceCategory->all();
        return view('admin/pages/product/create', compact('categories'));
    }

    public function store(ProductRequestStore $request)
    {
        return $this->service->store($request);
    }

    public function show($id)
    {
        $categories = $this->serviceCategory->all();
        $item = $this->service->find($id);
        return view('admin/pages/product/show', compact('item', 'categories'));
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
