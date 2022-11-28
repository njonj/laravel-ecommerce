<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    use HasFactory;

    protected $table = 'subcategories';
    protected $fillable = ['id', 'name', 'categoriesId'];

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'foreign_key');
    }

    public function products(){
        return $this->hasMany(Products::class, 'foreign_key');
    }
}
