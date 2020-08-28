<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamRequestStore;
use App\Http\Requests\TeamRequestUpdate;
use App\Services\TeamService;

class TeamController extends Controller
{

    private $service;

    public function __construct(TeamService $service)
    {
        $this->middleware('auth');
        $this->service = $service;
    }

    public function index()
    {
        $items = $this->service->paginate();
        return view('admin/pages/team/index', compact('items'));
    }

    public function create()
    {
        return view('admin/pages/team/create');
    }

    public function store(TeamRequestStore $request)
    {
        return $this->service->store($request);
    }

    public function show($id)
    {
        $item = $this->service->find($id);
        return view('admin/pages/team/show', compact('item'));
    }

    public function update(TeamRequestUpdate $request, $id)
    {
        return $this->service->update($request, $id);
    }

    public function delete($id)
    {
        return $this->service->delete($id);
    }
}
