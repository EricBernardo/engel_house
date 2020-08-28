<?php
namespace App\Services;

use App\Jobs\ProcessSendMail;
use App\Models\Lead;

class LeadService extends DefaultService
{
    public function __construct(Lead $model)
    {
        $this->model = $model;
    }

    public function paginate() {
        return $this->model->orderBy('id', 'desc')->paginate();
    }

    public function store($request) {

        if($this->model->insert([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'message' => $request->get('message'),
            'http_referrer' => $request->get('http_referrer'),
            'created_at' => date('Y-m-d H:i:s')
        ])) {

            ProcessSendMail::dispatch($request->all());

            return ['status' => 'success'];
        }

    }

}
