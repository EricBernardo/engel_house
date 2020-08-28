<?php
namespace App\Services;

use App\Models\Seo;
use Illuminate\Support\Facades\File;

class SeoService extends DefaultService
{
    public function __construct(Seo $model)
    {
        $this->model = $model;
    }

    public function getSeo() {

        $result = $this->model
        ->where('path', request()->path())
        ->where('status', 1)
        ->orderBy('order')
        ->first();

        if(!$result) {
            $result = $this->model
                            ->where('path', '/')
                            ->where('status', 1)
                            ->orderBy('order')->first();
        }

        return $result;
    }

    public function store($request) {

        $image = $this->uploadFile($request, 'seo', 'image');

        $this->model->insert([
            'title' => $request->get('title'),
            'path' => $request->get('path'),
            'description' => $request->get('description'),
            'keywords' => $request->get('keywords'),
            'order' => $request->get('order'),
            'image' => $image,
            'status' => $request->get('status') == '1' ? true : false,
        ]);

        return redirect()
        ->route('seo.create')
        ->with('message', 'Cadastrado com sucesso!');

    }

    public function update($request, $id) {

        $entity = $this->model->find($id);

        $data = [
            'title' => $request->get('title'),
            'path' => $request->get('path'),
            'description' => $request->get('description'),
            'keywords' => $request->get('keywords'),
            'order' => $request->get('order'),
            'status' => $request->get('status') == '1' ? true : false,
        ];

        if($request->hasFile('image')) {
            if($image = $entity['image']) {
                File::delete('storage/' . $image);
            }
            $data['image'] = $this->uploadFile($request, 'seo', 'image');
        }

        $entity->update($data);

        return redirect()
        ->route('seo.show', ['id' => $id])
        ->with('message', 'Atualizado com sucesso!');

    }

    public function delete($id) {

        $entity = $this->model->find($id);

        if($image = $entity['image']) {
            File::delete('storage/' . $image);
        }

        $entity->delete();

        return redirect()
        ->route('seo.index')
        ->with('message', 'Registro excluido com sucesso!');

    }

}
