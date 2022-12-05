@extends('layouts.app')

@section('content')
@if (session()->has('message'))
<div class="alert alert-success">

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>

    {{ session()->get('message') }}
</div>



@endif
<div class="container products">

<div class="row">

        @foreach ( $products as $product  )
        <div class="col-md-4">
        <div class="card">

                <div class="img-wrapper">
                    <a href="{{ route('products.show', $product->products_id) }}" class="custom-card">
                        <img src="{{ asset('/sales/'.$product->products_image) }}" class="card-img-top img-fluid" alt="..." height="200px" width="200px">
                        {{-- <img class="hover-img" src="{{ asset('/sales/'.$product->products_image) }}" alt="#"> --}}
                    </a>
                </div>

        <div class="card-body">
            <h3>
                <span class="text-primary">{{ $product->products_name }}</span>
               </h3>

                    <h3 class="lead">Kshs {{ $product->products_price }} </h3>



                    <form action="{{ route('addcart', $product->products_id) }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="number" value="1" min="1" class="form-control" style="width: 100px" name="quantity">
                        <br>
                            <input type="submit" value=" Add To Cart" class="btn btn-success btn-xs">



                </form>
                {{-- <p class="btn-holder"><a href="{{ url('/addTocart') }}" class="btn btn-warning btn-block text-center" role="button">  Add to cart</a> </p> --}}
        </div>
        </div>
</div>
    @endforeach



    </div>
</div>

<hr>
<br>


@endsection




