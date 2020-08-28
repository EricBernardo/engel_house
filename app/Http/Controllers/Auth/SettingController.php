<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequestStore;
use App\Http\Requests\SettingRequestUpdate;
use App\Services\SettingService;

class SettingController extends Controller
{

    private $service;

    public function __construct(SettingService $service)
    {
        $this->middleware('auth');
        $this->service = $service;
    }

    public function index()
    {
        $items = $this->service->paginate();
        return view('admin/pages/setting/index', compact('items'));
    }

    public function create()
    {
        return view('admin/pages/setting/create');
    }

    public function store(SettingRequestStore $request)
    {
        return $this->service->store($request);
    }

    public function show($id)
    {
        $item = $this->service->find($id);
        return view('admin/pages/setting/show', compact('item'));
    }

    public function update(SettingRequestUpdate $request, $id)
    {
        return $this->service->update($request, $id);
    }

    public function delete($id)
    {
        return $this->service->delete($id);
    }
}
