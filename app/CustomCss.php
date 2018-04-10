<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;

class CustomCss extends Model
{
    use UsesTenantConnection;
    protected $fillable = [
        'topbar_bgcolor',
        'topbar_fontcolor',
        'sidebar_bgcolor',
        'sidebar_fontcolor'
//        'link_color',
//        'h1_color',
//        'h2_color',
//        'h3_color',
//        'h4_color',
//        'h5_color'
    ];
}
