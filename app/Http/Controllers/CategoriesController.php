<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function phones(Products $products)
    {
        $products = DB::select('select * from products where categoriesId = :id ', ['id' => 1]);


        return view('categories.phones', ["products" => $products]);
    }


    public function laptops(Products $products)
    {

        $products = DB::select('select * from products where categoriesId = :id', ['id' => 2]);

        return view('categories.laptops', ["products" => $products]);
    }

    public function electronics(Products $products)
    {

        $products = DB::select('select * from products where categoriesId = :id', ['id' => 3]);

        return view('categories.electronics', ["products" => $products]);
    }

    public function car_electronics(Products $products)
    {
        $products = DB::select('select * from products where categories_id = :id', ['id' => 4]);

        return view('categories.car_electronics', ["products" => $products]);
    }
}
