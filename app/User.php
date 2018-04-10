<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Hyn\Tenancy\Traits\UsesTenantConnection;

class User extends Authenticatable
{
    use Notifiable, UsesTenantConnection;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'password',
        'user_type',
        'language',
        'language_id',
        'first_name',
        'last_name',
        'language',
        'mobile',
        'email',
        'profile_picture',
        'town',
        'state',
        'country_id',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
