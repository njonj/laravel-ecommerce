<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $primaryKey = 'orders_id';

    public function customers(){
        return $this->belongsTo(Customers::class);
    }

    public function orders_details(){
        return $this->hasOne(Orders_details::class);
    }

    public function products(){
        return $this->belongsToMany(Products::class);
    }
}
