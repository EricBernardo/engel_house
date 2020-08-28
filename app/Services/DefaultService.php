<?php
namespace App\Services;
use Illuminate\Support\Str;

class DefaultService
{
    protected $model;

    public function first() {
        return $this->model->where('status', 1)->orderBy('order')->first();
    }

    public function all() {
        return $this->model->where('status', 1)->orderBy('order')->get();
    }

    public function paginate() {
        return $this->model->paginate();
    }

    public function find($id) {
        return $this->model->find($id);
    }

    public function findSlug($slug) {
        return $this->model->where('slug', $slug)->first();
    }

    public function uploadFile($request, $folder, $file = 'image') {

        $name = uniqid(date('HisYmd'));

        if($title = $request->get('title')) {
            $name = Str::of($title)->slug('-') . '-' . $name;
        }

        $extension = $request->{$file}->extension();

        $nameFile = "{$name}.{$extension}";

        $image = $request->{$file}->storeAs($folder, $nameFile);

        if (!$image) {
            return redirect()
                        ->back()
                        ->with('errors', 'Falha ao fazer upload')
                        ->withInput();
        }

        return $image;

    }

}
