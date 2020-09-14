<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequestStore;
use App\Http\Requests\CategoryRequestUpdate;
use App\Services\CategoryService;

class CategoryController extends Controller
{

    private $service;

    public function __construct(CategoryService $service)
    {
        $this->middleware('auth');
        $this->service = $service;
    }

    public function index()
    {
        $items = $this->service->paginate();
        return view('admin/pages/category/index', compact('items'));
    }

    public function create()
    {
        return view('admin/pages/category/create');
    }

    public function store(CategoryRequestStore $request)
    {
        return $this->service->store($request);
    }

    public function show($id)
    {
        $item = $this->service->find($id);
        return view('admin/pages/category/show', compact('item'));
    }

    public function update(CategoryRequestUpdate $request, $id)
    {
        return $this->service->update($request, $id);
    }

    public function delete($id)
    {
        return $this->service->delete($id);
    }
}
