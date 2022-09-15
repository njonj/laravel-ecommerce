<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['customers_id','products_id','products_quantity'];

    public function products(){
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }

}
