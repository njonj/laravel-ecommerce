<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Vendors extends Authenticatable
{
    use HasFactory;

    protected $guard = 'vendor';

    protected $fillable = [
        'name', 'username','phone_no', 'email', 'password','users_category',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function products(){
        return $this->belongsToMany(Products::class);
    }
}
