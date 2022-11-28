<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['id','categories_name'];

    public function products(){
        return $this->hasMany(Products::class, 'foreign_key');
    }

    public function subcategories(){
        return $this->hasMany(SubCategories::class,'foreign_key' );
    }
}
