<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistrationForm extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'gender', 'ageRange', 'mobileNumber', 'email', 'nationality', 'activity', 'facebook', 'instagram', 'shareAllowed',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
