<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'name_site',
        'logo',
        'favicon',
        'whatsapp',
        'whatsapp_ads',
        'phone_1',
        'phone_2',
        'phone_3',
        'phone_ads',
        'address',
        'google_maps',
        'copyright',
        'facebook_link',
        'order',
        'status',
        'email'
    ];
}
