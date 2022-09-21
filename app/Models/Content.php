<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'about',
        'logo',
        'favicon',
        'yt_link',
        'slider_text',
        'slider_image',
        'banner_image',
        'safe_image',
        'email',
        'phone',
        'address',
    ];
}
