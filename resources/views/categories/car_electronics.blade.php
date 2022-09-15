@extends('layouts.app')

@section('content')

<div class="main container flex">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ( $products as $product  )
        <div class="col">
            <div class="card h-100">
                <a href="{{ route('products.show', $product->products_id) }}">
                    <img src="{{ asset('/sales/'.$product->products_image) }}" class="card-img-top" alt="...">
                </a>
                    <div class="card-body">
                <h5 class="card-title">{{ $product->products_name }}</h5>
                <span class="justify-end"><strong style="color: orange; font-size: 14px;">{{ $product->products_price }}</strong></span>
                {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                <div class="progress" style="width: 25%">
                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">{{ $product->products_quantity }}</div>
                  </div>
            </div>
            </div>
          </div>
        @endforeach

    </div>
</div>




@endsection



