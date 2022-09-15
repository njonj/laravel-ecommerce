<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $primaryKey = 'categories_id';
    protected $fillable = ['categories_id','categories_name','categories_description'];

    public function products(){
        return $this->belongsToMany(Products::class, 'foreign_key');
    }
}
