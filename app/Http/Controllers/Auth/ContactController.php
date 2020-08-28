<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequestStore;
use App\Http\Requests\ContactRequestUpdate;
use App\Services\ContactService;

class ContactController extends Controller
{

    private $service;

    public function __construct(ContactService $service)
    {
        $this->middleware('auth');
        $this->service = $service;
    }

    public function index()
    {
        $items = $this->service->paginate();
        return view('admin/pages/contact/index', compact('items'));
    }

    public function create()
    {
        return view('admin/pages/contact/create');
    }

    public function store(ContactRequestStore $request)
    {
        return $this->service->store($request);
    }

    public function show($id)
    {
        $item = $this->service->find($id);
        return view('admin/pages/contact/show', compact('item'));
    }

    public function update(ContactRequestUpdate $request, $id)
    {
        return $this->service->update($request, $id);
    }

    public function delete($id)
    {
        return $this->service->delete($id);
    }
}
