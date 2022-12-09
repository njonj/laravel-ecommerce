<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubController extends Controller
{
    public function nokia()
    {
        $products = DB::select('select * from products where subCategoriesId = :id', ['id' => 1]);

        return view('subcategories.nokia', ["products" => $products]);
    }
    public function huawei()
    {
        $products = DB::select('select * from products where subCategoriesId = :id', ['id' => 3]);

        return view('subcategories.huawei', ["products" => $products]);
    }
    public function xiaomi()
    {
        $products = DB::select('select * from products where subCategoriesId = :id', ['id' => 2]);

        return view('subcategories.xiaomi', ["products" => $products]);
    }
    public function samsung()
    {
        $products = DB::select('select * from products where subCategoriesId = :id', ['id' => 4]);

        return view('subcategories.samsung', ["products" => $products]);
    }
    public function oppo()
    {
        $products = DB::select('select * from products where subCategoriesId = :id', ['id' => 5]);

        return view('subcategories.oppo', ["products" => $products]);
    }
    public function hp(){
        $products = DB::select('select * from products where subCategoriesId = :id', ['id' => 6]);

        return view('subcategories.hp', ["products" => $products]);
    }
    public function dell(){
        $products = DB::select('select * from products where subCategoriesId = :id', ['id' => 8]);

        return view('subcategories.dell', ["products" => $products]);
    }
    public function toshiba(){
        $products = DB::select('select * from products where subCategoriesId = :id', ['id' => 7]);

        return view('subcategories.toshiba', ["products" => $products]);
    }
    public function lenovo(){
        $products = DB::select('select * from products where subCategoriesId = :id', ['id' => 9]);

        return view('subcategories.lenovo', ["products" => $products]);
    }
    public function accessories(){
        $products = DB::select('select * from products where subCategoriesId = :id', ['id' => 10]);

        return view('subcategories.accessories', ["products" => $products]);
    }
    public function tv(){
        $products = DB::select('select * from products where subCategoriesId = :id', ['id' => 11]);

        return view('subcategories.tv', ["products" => $products]);
    }
}
