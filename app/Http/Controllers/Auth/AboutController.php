<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequestStore;
use App\Http\Requests\AboutRequestUpdate;
use App\Services\AboutService;

class AboutController extends Controller
{

    private $service;

    public function __construct(AboutService $service)
    {
        $this->middleware('auth');
        $this->service = $service;
    }

    public function index()
    {
        $items = $this->service->paginate();
        return view('admin/pages/about/index', compact('items'));
    }

    public function create()
    {
        return view('admin/pages/about/create');
    }

    public function store(AboutRequestStore $request)
    {
        return $this->service->store($request);
    }

    public function show($id)
    {
        $item = $this->service->find($id);
        return view('admin/pages/about/show', compact('item'));
    }

    public function update(AboutRequestUpdate $request, $id)
    {
        return $this->service->update($request, $id);
    }

    public function delete($id)
    {
        return $this->service->delete($id);
    }
}
