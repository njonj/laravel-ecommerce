<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function cars(Products $products){
        $products = DB::select('select * from products where categories_id = :id ', ['id' => 4]);
    
        return view('categories.cars', ["products" => $products]);
    }


    public function clothing(Products $products){

        $products = DB::select('select * from products where categories_id = :id', ['id' => 2]);

        return view('categories.clothing', ["products" => $products]);
    }
}
