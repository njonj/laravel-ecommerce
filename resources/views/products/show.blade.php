@extends('layouts.app')

@section('content')
<section class="main py-1">
    <div class="container">

        <div class="row" style="margin-bottom: 3em">
            @foreach ($products as $product)
            <div class="col-md-4 product-image">

                <div>



                    <img src="{{  asset('/sales/'.$product->products_image) }}" width="100%" height="100%" id="current-image">
                </div>

            </div>
            <div class="product-details col-md-5 offset-md-1">
                <h2 class="lead" style="margin-top:1em">{{ $product->products_name }}</h2>
                <h3 class="lead"> {{ $product->products_price }} </h3>
                <p class="light-text">{{ $product->products_description }}</p>
                {{-- @if ($product->products_quantity > 0)
                    <form action="{{ route('cart.store') }}" method="POST">
                        @csrf()
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <button type="submit" class="btn custom-border-n">Add to Cart</button>
                    </form>
                @endif --}}
            </div>
            @endforeach
        </div>
        <!-- <hr> -->
    </div>
<div class="container overflow-hidden">
    <div class="row gx-5">
        @if (is_array($products) || is_object($products))
 @foreach ($products as $product)
        <div class="col">
            <div class="p-5 border bg-light">
                <img src="{{  asset('/sales/'.$product->products_image) }}" width="100%" height="100%" id="current-image">
            </div>
           </div>
           <div class="col">
             <div class="p-3 border bg-light">
    <h6><bold>{{  $product->products_price }}</bold></h6>
    <button class="primary">Add to Cart</button>
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


@endforeach
@endif
    </div>
</div>


</section>
@endsection




