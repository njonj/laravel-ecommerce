@extends('layouts.app')

@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@elseif ($errors->any())
    <div class="alert alert-danger">

    @foreach ($errors->all() as $error)
       <li class="text-red-500 list-none"{{ $error }}</li>
    @endforeach

    </div>
@endif




<div class="row my-3">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <div class="card-header bg-primary">
        <h3 class="text-light fw-bold">Edit Product</h3>
      </div>
<div class="card-body p-4">

<section class="container">


<div class="main flex justify-center pt-20">

    <form action="{{ route('products.update', $products->products_id)}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
        {{-- <div class="form-group ">

            <label for="username"> <strong>Username:</strong> </label>
            <input type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $products->username }}" required autocomplete="username" autofocus" id="floatingInput" >
             </div> --}}
             <br>
            <div class="form-group">
                <label for="products_name"><strong>Name:</strong></label>
                <input type="text" class="form-control" name="products_name" value="{{ $products->products_name }}">
            </div>
            <br>
                 {{-- <div class="form-group">
                @php( $categories = \App\Models\Categories::all() )

                <label for="category"> <strong> Categories: </strong></label>
                <input type="text" class="form-control" name="categories_name" value="{{ $products->categories_name }}">
            <select class="form-control" name="categories_name" id="categories_name">
                @foreach ( $categories as $category )
                  <option value="{{ $category->categories_id }}">{{ $category->categories_name }}</option>
                @endforeach
            </select>
        </div>
        <br> --}}
        <div class="form-group">
            <label for="products_image"><strong>Select a Product's Image: </strong></label>
            <input type="file" id="products_image" name="products_image">
        </div>
        <br>
        <div class="form-group">
           <label for="price"> <strong>Price:</strong></label>
           <input type="price" name="products_price" value="{{ $products->products_price }}">

        </div>
        <br>
        <div class="form-group">
            <label for="quantity"><strong>Quantity:</strong></label>
            <input type="number" id="quantity" name="products_quantity" value="{{ $products->products_quantity }}">
        </div>
        <br>
        <div class="form-group">
          <label for="description"><strong>Description:</strong></label>
            <textarea class="form-control" style="height:150px" name="products_description" placeholder="Describe the specifications of the product">{{ $products->products_description }}</textarea>
        </div>
        <br>
        <div class=" btn flex justify-center">
            <input type="submit" value="Update" class="btn btn-primary">
        </div>
        </div>
    </form>






</section>
</div>

@endsection
