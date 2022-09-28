<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Vendors;
use App\Models\Categories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{



    // public function __construct()
    // {

    //     $this->middleware([Auth::guard('seller')], ['except' => 'index', 'show']);
    // }


    public function index()
    {

        return view('products.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Products $products)
    {
        $check = $request->all();
        // if everything is correct directed to the admin dashboard
        if (Auth::guard('seller')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('products.create')->with('error', 'Admin Login Successful');
        } else {
            // when wrong credentials u return to admin.login
            return back()->with('error', 'Invalid Email or Password');
        }
        $products = Products::all();

        return view('products.create', [
            'products' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Products $products)
    {



        // return($request);

        // // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('image')) {

            // $imageName = auth()->user_id;
            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('sales'), $imageName);


            $name = $request->input('products_name');
            $price =  $request->input('products_price');
            $quantity = $request->input('products_quantity');
            $description = $request->input('products_description');
            $categories = $request->get('categories_name');


            //     // Save the file locally in the storage/public/ folder under a new folder named /product

            // storing by passing an array to the Purchase model
            $products = Products::create([
                'username' =>  $request->get('username'),
                'products_name' => $name,
                'products_price' => $price,
                'products_quantity' => $quantity,
                'products_description' => $description,
                'products_image' => $imageName,
                'categories_id' => $categories,




                // 'category' => $category
            ]);

            $categories = DB::select('select categories_id from categories');



            $products->save(); // Finally, save the record.
        } else {

            return "no file";
        }

        return redirect()->route('seller.dashboard')->with('error', 'Product Uploaded Successfully');
        // return to_route('seller.dashboard')->with('success', 'Product Uploaded Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($products_id)
    {

        $products = DB::select('select * from products where products_id=' . $products_id);


        return view('products.show', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($products_id)
    {
        // $products = Products::findOrFail($products_id);

        return view('products.edit', [
            'products' => Products::where('products_id', $products_id)->first()
        ]);

        // $products = Products::where( $products_id)->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products_id)
    {
        // Products::where('products_id',$products_id)->update($request->except([
        //     '_token','_method']));

        if ($request->hasFile('image')) {

            // $imageName = auth()->user_id;
            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('sales'), $imageName);


            $name = $request->input('products_name');
            $price =  $request->input('products_price');
            $quantity = $request->input('products_quantity');
            $description = $request->input('products_description');
            $categories = $request->get('categories_name');


            //     // Save the file locally in the storage/public/ folder under a new folder named /product

            // storing by passing an array to the Purchase model
            $products = Products::where('products_id', $products_id)->update([
                'username' =>  $request->get('username'),
                'products_name' => $name,
                'products_price' => $price,
                'products_quantity' => $quantity,
                'products_description' => $description,
                'products_image' => $imageName,
                'categories_id' => $categories,




                // 'category' => $category
            ]);

            $categories = DB::select('select categories_id from categories');



            $products->save(); // Finally, save the record.
        } else {

            return "no file";
        }

        return redirect('/products')->with('success', 'Product Uploaded Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($products_id)
    {
        $products_id = Products::find($products_id);
        $products_id->delete();

        return redirect('/products');
    }
}
