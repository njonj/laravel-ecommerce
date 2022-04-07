<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Customers extends Authenticatable
{
    use HasFactory;

    protected $guard = 'customers';

    protected $fillable = [
        'name','username', 'email', 'phone_no', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function orders(){
        return $this->hasMany(Orders::class);
    }
}
