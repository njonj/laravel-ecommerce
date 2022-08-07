@extends('layouts.app')

@section('content')

<div class="main container flex">
    <div class="row row-cols-1 row-cols-md-3 g-4">

            @foreach ($products as $product)
                <!-- start single product -->
                <div class="col-md-6 col-sm-12 col-lg-4 product">
                    <a href="{{ route('products.show', $product->products_id) }}" class="custom-card">
                        <div class="card view overlay zoom">
                            <img src="{{ asset('/sales/'.$product->products_image) }}" class="card-img-top img-fluid" alt="..." height="200px" width="200px">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <span class="text-primary">{{ $product->products_name }}</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h3 class="lead">Kshs {{ $product->products_price }} </h3>
                                </div>
                                 <div class="product-actions" style="display: flex; align-items: center; justify-content: center">
                                <a class="cart" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="bi bi-cart4"></i></a>
                                <div class="progress" style="width: 25%">
                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">{{ $product->products_quantity }}</div>
                                  </div>
                                {{-- <a class="like" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fa fa-thumbs-up"></i></a> --}}
                                    {{-- <a class="heart" href="#"><i style="color:blue; font-size: 1.3em" class="fa fa-heart-o"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </a>
                 <!-- end single product -->
                </div>

            @endforeach
        <!-- end products row -->
        </div>
        <!-- end products section -->
    </div>




@endsection



