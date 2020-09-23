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
        'phone_1',
        'address',
        'google_maps',
        'copyright',
        'facebook_link',
        'order',
        'status',
        'email'
    ];
}
