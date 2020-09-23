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

        $insert_id = $this->model->insertGetId([
            'subcategory_id' => $request->get('subcategory_id'),
            'slug' => Str::slug($request->get('title'), '-'),
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'order' => $request->get('order'),
            'image' => '',
            'image_mobile' => '',
            'views' => 0,
            'price' => str_replace(['.', ','], ['', '.'], $request->get('price')),
            'status' => $request->get('status') == '1' ? true : false,
            'featured' => $request->get('status') == '1' ? true : false,
            'created_at' => date('Y-m-d h:i:s'),
        ]);

        $entity = $this->model->find($insert_id);

        if ($request->hasFile('image')) {

            $imageFile = request()->file('image');

            $image = $entity->uploadImage($imageFile, 'image');

            $data['image'] = $image['image'];

            $image_mobile = $entity->uploadImage($imageFile, 'image_mobile');

            $data['image_mobile'] = $image_mobile['image_mobile'];

            $entity->update($data);
        }

        return redirect()
            ->route('products.create')
            ->with('message', 'Cadastrado com sucesso!');
    }

    public function update($request, $id)
    {

        $entity = $this->model->find($id);

        $data = [
            'subcategory_id' => $request->get('subcategory_id'),
            'slug' => Str::slug($request->get('title'), '-'),
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'order' => $request->get('order'),
            'price' => str_replace(['.', ','], ['', '.'], $request->get('price')),
            'status' => $request->get('status') == '1' ? true : false,
            'featured' => $request->get('status') == '1' ? true : false,
            'updated_at' => date('Y-m-d h:i:s'),
        ];

        if ($request->hasFile('image')) {

            if ($image = $entity['image']) {
                File::delete('storage/' . $image);
            }

            $imageFile = request()->file('image');

            $image = $entity->uploadImage($imageFile, 'image');

            $data['image'] = $image['image'];

            if ($image_mobile = $entity['image_mobile']) {
                File::delete('storage/' . $image_mobile);
            }

            $image_mobile = $entity->uploadImage($imageFile, 'image_mobile');

            $data['image_mobile'] = $image_mobile['image_mobile'];
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

    public function related($product)
    {
        return $this->model->where('status', 1)
            ->where('id', '!=', $product['id'])
            ->whereHas('subcategory', function ($q) use ($product) {
                $q->where('category_id', '=', $product->subcategory->category['id']);
            })
            ->orderBy('order')->get();
    }

    public function getProducts()
    {

        $result = $this->model->where(function ($q) {
            $q->where('status', '=', 1);

            if ($result = strtolower(request()->get('q'))) {
                $q->whereRaw('lower(title) like (?)', ["%{$result}%"]);
            }
        })
            ->whereHas('subcategory', function ($q1) {
                if ($subcategory_slug = request()->get('subcategory')) {
                    $q1->where('slug', $subcategory_slug);
                }

                $q1->whereHas('category', function ($q2) {
                    if ($category_slug = request()->get('category')) {
                        $q2->where('slug', $category_slug);
                    }
                });
            });



        return $result->orderBy('order')->paginate();
    }

    public function newsProducts()
    {
        return $this->model->where(function ($q) {
            $q->where('status', '=', 1);
        })->orderBy('id', 'desc')->limit(8)->get();
    }

    public function featuredProdutos()
    {
        $result = $this->model->where(function ($q) {
            $q->where('status', '=', 1);
            $q->where('featured', '=', 1);
        });

        return $result->orderBy('order')->limit(8)->get();
    }

    public function mostViewedProducts()
    {
        $result = $this->model->where(function ($q) {
            $q->where('status', '=', 1);
        });

        return $result->orderBy('views', 'desc')->limit(8)->get();
    }

    public function setView($product_slug) {
        
        $product_views = session('product_views');
        
        if(!$product_views || !in_array($product_slug, $product_views)) {
            
            $product_views[] = $product_slug;

            $product = $this->model->where('slug', $product_slug);

            if($product->update(['views' => \DB::raw('views+1')])) {
                session(['product_views' => $product_views]);
            }

        }

    }
}
