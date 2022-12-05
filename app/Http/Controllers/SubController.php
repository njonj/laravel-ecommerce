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
}
