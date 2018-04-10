<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;

class GlobalParameter extends Model
{
    use UsesTenantConnection;
    protected $fillable = [
        'tenant_large_logo',
        'tenant_small_logo',
        'tenant_favicon',
        'tenant_webclip',
        'tenant_sitename'
    ];
}
