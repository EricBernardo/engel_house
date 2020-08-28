<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequestStore extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_site' => 'required',
            'logo' => 'required|image',
            'favicon' => 'required|image',
            'whatsapp' => 'required',
            'phone_1' => 'required',
            'phone_2' => 'required',
            'phone_3' => 'required',
            'address' => 'required',
            'google_maps' => 'required',
            'facebook_link' => 'required',
            'copyright' => 'required',
            'order' => 'required',
            'status' => 'required',
            'email' => 'required|email'
        ];
    }
}
