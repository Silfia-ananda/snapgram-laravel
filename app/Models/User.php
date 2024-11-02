<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    protected $primaryKey = 'userID';
    protected $fillable = [
        'username',
        'email',
        'password',
        'namaLengkap',
        'alamat',
    ];

    /**pro
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ['password', 'remember_token',];

    
}
