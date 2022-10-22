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
            <form action="{{ route('add-to-cart') }}" method="post">
                @csrf
        <div class="card-body">
            <h3>
                <span class="text-primary">{{ $product->products_name }}</span>
               </h3>

                    <h5 class="lead">Kshs {{ $product->products_price }} </h5>
                    <div style="height: 100px">Quantity <input type="number" name="quantity" id="qty" value="1" min="1" max="10"> Available stock: {{$product->products_quantity}}
                    </div>
                    {{-- <button type="submit" style="float:right" class="btn btn-danger btn-xs">Add To Cart</button> --}}
                    <p class="btn-holder"><a href="{{ url('add-to-cart')}}" class="btn btn-warning btn-block text-center" role="button">  <i class="bi bi-cart4"></i> Add to cart</a> </p>


        </div>
    </form>

    </div>
</div>
    @endforeach



    </div>
</div>

<hr>
<br>


@endsection




