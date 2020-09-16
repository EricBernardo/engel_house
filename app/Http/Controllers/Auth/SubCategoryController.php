<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryRequestStore;
use App\Http\Requests\SubCategoryRequestUpdate;
use App\Services\CategoryService;
use App\Services\SubCategoryService;

class SubCategoryController extends Controller
{

    private $service;
    private $serviceCategory;

    public function __construct(SubCategoryService $service, CategoryService $serviceCategory)
    {
        $this->middleware('auth');
        $this->service = $service;
        $this->serviceCategory = $serviceCategory;
    }

    public function index()
    {
        $items = $this->service->paginate();
        return view('admin/pages/subcategory/index', compact('items'));
    }

    public function create()
    {
        $categories = $this->serviceCategory->all();
        return view('admin/pages/subcategory/create', compact('categories'));
    }

    public function store(SubCategoryRequestStore $request)
    {
        return $this->service->store($request);
    }

    public function show($id)
    {
        $item = $this->service->find($id);
        $categories = $this->serviceCategory->all();
        return view('admin/pages/subcategory/show', compact('item', 'categories'));
    }

    public function update(SubCategoryRequestUpdate $request, $id)
    {
        return $this->service->update($request, $id);
    }

    public function delete($id)
    {
        return $this->service->delete($id);
    }
}
