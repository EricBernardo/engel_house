<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductService extends DefaultService
{
    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function store($request)
    {

        $image = $this->uploadFile($request, 'products', 'image');

        $image_mobile = $this->uploadFile($request, 'abouts', 'image_mobile');

        $this->model->insert([
            'slug' => Str::slug($request->get('title'), '-'),
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'order' => $request->get('order'),
            'image' => $image,
            'image_mobile' => $image_mobile,
            'status' => $request->get('status') == '1' ? true : false,
        ]);

        return redirect()
            ->route('products.create')
            ->with('message', 'Cadastrado com sucesso!');
    }

    public function update($request, $id)
    {

        $entity = $this->model->find($id);

        $data = [
            'slug' => Str::slug($request->get('title'), '-'),
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'order' => $request->get('order'),
            'status' => $request->get('status') == '1' ? true : false,
        ];

        if ($request->hasFile('image')) {
            if ($image = $entity['image']) {
                File::delete('storage/' . $image);
            }
            $data['image'] = $this->uploadFile($request, 'products', 'image');
        }

        if ($request->hasFile('image_mobile')) {
            if ($image_mobile = $entity['image_mobile']) {
                File::delete('storage/' . $image_mobile);
            }
            $data['image_mobile'] = $this->uploadFile($request, 'products', 'image_mobile');
        }

        $entity->update($data);

        return redirect()
            ->route('products.show', ['id' => $id])
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
            ->route('products.index')
            ->with('message', 'Registro excluido com sucesso!');
    }
}
