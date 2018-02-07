<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistrationFormThree extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'date', 'signatureString', 'earInfection', 'earDisease', 'earSinusSurgery', 'sickness', 'respiratoryProblem', 'collapsedLung', 'asthma',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
