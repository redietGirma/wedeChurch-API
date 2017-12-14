<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Church extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'church_name', 'church_location', 'contact','senior_leader'
    ];


}
