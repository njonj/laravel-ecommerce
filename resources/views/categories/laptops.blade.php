@extends('layouts.app')

@section('content')
<div class="container products">
<div class="row">

        @foreach ( $products as $product  )
        <div class="col-md-4">
        <div class="card">

                <div class="img-wrapper">
                    <a href="{{ route('products.show', $product->products_id) }}" class="custom-card">
                        <img src="{{ asset('/sales/'.$product->products_image) }}" class="card-img-top img-fluid" alt="..." height="200px" width="200px">
                    </a>
                </div>
        <div class="card-body">
            <h3>
                <span class="text-primary">{{ $product->products_name }}</span>
               </h3>

                    <h5 class="lead">Kshs {{ $product->products_price }} </h5>

                    <p class="btn-holder"><a href="{{ url('add-to-cart/' .$product->products_id) }}" class="btn btn-warning btn-block text-center" role="button">  <i class="bi bi-cart4"></i> Add to cart</a> </p>

            {{-- <div class="product-actions" style="display: flex; align-items: center; justify-content: center"> --}}

                        {{-- <a href="{{ route('cart.edit', $product->products_id) }}" > --}}
                            {{-- <button  type="button" class="add-to-cart-btn btn btn-warning btn-block float-start text-center">
                                <i class="bi bi-cart4"></i> Add to Cart
                            </button> --}}
                            {{-- </a> --}}


{{--
                    <div class="progress" style="width: 25%">
                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">{{ $product->products_quantity }}</div>
                  </div> --}}
            {{-- </div> --}}
        </div>

    </div>
</div>
    @endforeach



    </div>
</div>

<hr>
<br>


@endsection




