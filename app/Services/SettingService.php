<?php

namespace App\Services;

use App\Models\Setting;
use Illuminate\Support\Facades\File;

class SettingService extends DefaultService
{
    public function __construct(Setting $model)
    {
        $this->model = $model;
    }

    public function store($request)
    {

        $logo = $this->uploadFile($request, 'settings', 'logo');
        $favicon = $this->uploadFile($request, 'settings', 'favicon');

        $this->model->insert([
            'name_site' => $request->get('name_site'),
            'logo' => $logo,
            'favicon' => $favicon,
            'whatsapp' => $request->get('whatsapp'),
            'whatsapp_ads' => $request->get('whatsapp_ads'),
            'phone_ads' => $request->get('phone_ads'),
            'phone_1' => $request->get('phone_1'),
            'phone_2' => $request->get('phone_2'),
            'phone_3' => $request->get('phone_3'),
            'address' => $request->get('address'),
            'google_maps' => $request->get('google_maps'),
            'facebook_link' => $request->get('facebook_link'),
            'copyright' => $request->get('copyright'),
            'order' => $request->get('order'),
            'email' => $request->get('email'),
            'status' => $request->get('status') == '1' ? true : false
        ]);

        return redirect()
            ->route('settings.create')
            ->with('message', 'Cadastrado com sucesso!');
    }

    public function update($request, $id)
    {

        $entity = $this->model->find($id);

        $data = [
            'name_site' => $request->get('name_site'),
            'whatsapp' => $request->get('whatsapp'),
            'whatsapp_ads' => $request->get('whatsapp_ads'),
            'phone_ads' => $request->get('phone_ads'),
            'phone_1' => $request->get('phone_1'),
            'phone_2' => $request->get('phone_2'),
            'phone_3' => $request->get('phone_3'),
            'address' => $request->get('address'),
            'google_maps' => $request->get('google_maps'),
            'facebook_link' => $request->get('facebook_link'),
            'copyright' => $request->get('copyright'),
            'order' => $request->get('order'),
            'email' => $request->get('email'),
            'status' => $request->get('status') == '1' ? true : false
        ];

        if ($request->hasFile('favicon')) {
            if ($favicon = $entity['favicon']) {
                File::delete('storage/' . $favicon);
            }
            $data['favicon'] = $this->uploadFile($request, 'settings', 'favicon');
        }

        if ($request->hasFile('logo')) {
            if ($logo = $entity['logo']) {
                File::delete('storage/' . $logo);
            }
            $data['logo'] = $this->uploadFile($request, 'settings', 'logo');
        }

        $entity->update($data);

        return redirect()
            ->route('settings.show', ['id' => $id])
            ->with('message', 'Atualizado com sucesso!');
    }

    public function delete($id)
    {

        $entity = $this->model->find($id);

        if ($logo = $entity['logo']) {
            File::delete('storage/' . $logo);
        }

        if ($favicon = $entity['favicon']) {
            File::delete('storage/' . $favicon);
        }

        $entity->delete();

        return redirect()
            ->route('settings.index')
            ->with('message', 'Registro excluido com sucesso!');
    }
}
