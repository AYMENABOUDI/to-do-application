<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user', 'status', 'role', 'section', 'birthday', 'birthmonth', 'birthyear', 'gender', 'firstname', 'lastname', 'image' , 'country', 'city', 'email', 'password', 'block_description', 'evaluation_etat', 'evaluation', 'last_evaluation', 'date', 'id_date', 'month', 'id_month', 'year', 'vue',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
