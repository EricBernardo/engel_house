<?php

namespace App\Services;

use App\Models\HomeProduct;
use Illuminate\Support\Facades\File;

class HomeProductService extends DefaultService
{
    public function __construct(HomeProduct $model)
    {
        $this->model = $model;
    }

    public function store($request)
    {

        $image = $this->uploadFile($request, 'home_products', 'image');

        $image_mobile = $this->uploadFile($request, 'abouts', 'image_mobile');

        $this->model->insert([
            'title' => $request->get('title'),
            'url' => $request->get('url'),
            'order' => $request->get('order'),
            'image' => $image,
            'image_mobile' => $image_mobile,
            'status' => $request->get('status') == '1' ? true : false,
        ]);

        return redirect()
            ->route('home_products.create')
            ->with('message', 'Cadastrado com sucesso!');
    }

    public function update($request, $id)
    {

        $entity = $this->model->find($id);

        $data = [
            'title' => $request->get('title'),
            'url' => $request->get('url'),
            'order' => $request->get('order'),
            'status' => $request->get('status') == '1' ? true : false,
        ];

        if ($request->hasFile('image')) {
            if ($image = $entity['image']) {
                File::delete('storage/' . $image);
            }
            $data['image'] = $this->uploadFile($request, 'home_products', 'image');
        }

        if ($request->hasFile('image_mobile')) {
            if ($image_mobile = $entity['image_mobile']) {
                File::delete('storage/' . $image_mobile);
            }
            $data['image_mobile'] = $this->uploadFile($request, 'home_products', 'image_mobile');
        }

        $entity->update($data);

        return redirect()
            ->route('home_products.show', ['id' => $id])
            ->with('message', 'Atualizado com sucesso!');
    }

    public function delete($id)
    {

        $entity = $this->model->find($id);

        if ($image = $entity['image']) {
            File::delete('storage/' . $image);
        }

        if ($image_mobile = $entity['image_mobile']) {
            File::delete('storage/' . $image_mobile);
        }

        $entity->delete();

        return redirect()
            ->route('home_products.index')
            ->with('message', 'Registro excluido com sucesso!');
    }
}
