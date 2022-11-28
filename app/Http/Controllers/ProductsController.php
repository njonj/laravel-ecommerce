<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Cart;
use App\Models\User;
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
        $product = Products::all();
        return view('products.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Products $products)
    {

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
            $subcategories = $request->get('name');


            //     // Save the file locally in the storage/public/ folder under a new folder named /product

            // storing by passing an array to the Purchase model
            $products = Products::create([
                'username' =>  $request->get('username'),
                'products_name' => $name,
                'products_price' => $price,
                'products_quantity' => $quantity,
                'products_description' => $description,
                'products_image' => $imageName,
                'categoriesId' => $categories,
                'subCategoriesId' => $subcategories,




                // 'category' => $category
            ]);

            $categories = DB::select('select id from categories');
            $subcategories = DB::select('select id from subcategories');



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

        // dd(test);
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
                'categoriesId' => $categories,




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


    // public function cart(Products $products_id)
    // {
    //     $products = Products::find($products_id);
    //     return view('cart');
    // }
    // public function addToCart($id)
    // {
    //     $r = request();
    //     $product = Products::find($id);

    //     if (!$product) {
    //         abort(404);
    //     }

    //     $carts = session()->get('cart');
    //     // if cart is empty then this is the first product
    //     if (!$carts) {
    //         $carts = [
    //             $id => [
    //                 $name = $product->products_name,
    //                 'quantity' => 1,
    //                 $price = $product->products_price,
    //                 $image = $product->products_image,
    //             ]
    //         ];

    //         session()->put('cart', $carts);
    //     }






    //     return redirect()->back()->with('error', 'Product added to cart successfully');


    //     $carts = Cart::create([
    //         'productId' => $r->products_id,
    //         'orderId' => "",

    //         'quantity' => 1,

    //         'userId' => Auth::guard('web'),
    //     ]);

    //     $carts->save();
    // }

    // public function upgrade(Request $request)
    // {
    //     if ($request->id and $request->quantity) {
    //         $cart = session()->get('cart');
    //         $cart[$request->id]['quantity'] = $request->quantity;

    //         session()->put('cart', $cart);
    //         session()->flash('error', 'Cart updated successfully');
    //     }
    // }

    // public function remove(Request $request)
    // {
    //     if ($request->id) {
    //         $cart = session()->get('cart');

    //         if (isset($cart[$request->id]));
    //         unset($cart[$request->id]);
    //         session()->put('cart', $cart);
    //     }
    //     session()->flash('error', 'Product removed successfully');
    // }
}
