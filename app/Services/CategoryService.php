<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryService extends DefaultService
{
    public function __construct(Category $model)
    {
        $this->model = $model;
    }

    public function store($request)
    {

        $this->model->insert([
            'slug' => Str::slug($request->get('title'), '-'),
            'title' => $request->get('title'),
            'order' => $request->get('order'),
            'status' => $request->get('status') == '1' ? true : false,
        ]);

        return redirect()
            ->route('categories.create')
            ->with('message', 'Cadastrado com sucesso!');
    }

    public function update($request, $id)
    {

        $entity = $this->model->find($id);

        $data = [
            'slug' => Str::slug($request->get('title'), '-'),
            'title' => $request->get('title'),
            'order' => $request->get('order'),
            'status' => $request->get('status') == '1' ? true : false,
        ];

        $entity->update($data);

        return redirect()
            ->route('categories.show', ['id' => $id])
            ->with('message', 'Atualizado com sucesso!');
    }

    public function delete($id)
    {

        $entity = $this->model->find($id);

        $entity->delete();

        return redirect()
            ->route('categories.index')
            ->with('message', 'Registro excluido com sucesso!');
    }
}
