<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name', 'email', 'phone', 'location', 'password',
    ];

    protected $hidden = [
        'password',
    ];
}
