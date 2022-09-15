<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders_details extends Model
{
    use HasFactory;
    protected $table= 'order_details';

    protected $fillable= [
        'order_id',
        'product_id',
        'quantity',
        'price',
    ];

    public function orders(){
    return $this->belongsTo(Orders::class);
    }

    public function products(){
        return $this->belongsTo(Products::class);
    }
}
