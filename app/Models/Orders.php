<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $primaryKey = 'orders_id';

    protected $fillable=["id", "amount","paymentStatus"];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function orders_details(){
        return $this->hasOne(Orders_details::class);
    }

    public function products(){
        return $this->hasMany(Products::class)
        ->withPivot(columns: 'products_quantity');
    }
}
