@extends('layouts.app')

@section('content')
<section class="main py-1">
<div class="container overflow-hidden ">
<div class="product-data">
<div class="row gx-5">
        @if (is_array($products) || is_object($products))
 @foreach ($products as $product)
        <div class="col">
            <div class="p-5 border bg-light">
                <img src="{{  asset('/sales/'.$product->products_image) }}" width="100%" height="100%" id="current-image">
            </div>
           </div>
           <div class="col">
             <div class="product-details col-md-5 offset-md-1">
                <h2 class="lead" style="margin-top:1em"><bold>{{ $product->products_name }}</bold></h2>
    <h6 class="lead"><strong>Kshs {{  $product->products_price }}</strong></h6>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum, non?</p>
    <div>
        @if ($product->products_quantity > 0)
           <label for="badge ba-success">In Stock</label>
        @else
            <label for="badge bg-danger">Out of Stock</label>
        @endif
    </div>
    <div class="py-3">
    <div class="row">
        <div class="col md-3 col-3">
            <input type="hidden" class="product_id" value="{{ $product->products_id }}" >
            <input type="number" class="qty-input form-control" value={{ $product->products_quantity }}>
        </div>

    <div class="col md-6 ">
        <button type="button" class="add-to-cart-btn btn btn-warning btn-block float-start text-center m-0 py-2 px-3" >Add to Cart</button>
        {{-- <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->products_name) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p> --}}

    </div>
             </div>
           </div>
           <div class="row g-2">
            <div class="col">
              <div class="p-3 border bg-light">
                  <table>
                    <thead>
                        <tr>
                            <th scope="col">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $product->products_description }}</td>
                        </tr>
                    </tbody>
                  </table>
                  <div class="d-flex">
                    <a href="{{ route ('products.edit', $product->products_id) }}" class="btn btn-primary m-1">Edit</a>

                    <form action="{{ route('products.destroy', $product->products_id ) }}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="btn btn-danger m-1">Delete</button>
                    </form>
                </div>
              </div>
            </div>
           </div>
        </div>
    </div>

@endforeach
@endif

</div>
</div>
</div>


</section>
@endsection





