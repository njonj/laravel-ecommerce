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
        <h3 class="text-light fw-bold">Add New Product</h3>
      </div>
<div class="card-body p-4">

<section class="container">


<div class="main flex justify-center pt-20">

    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
      @csrf
        <div class="form-group ">

            <label for="username"> <strong>Username:</strong> </label>
            <input type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus" id="floatingInput" placeholder="hcee4,nyto78">
             </div>
             <br>
            <div class="form-group">
                <label for="products_name"><strong>Name:</strong></label>
                <input type="text" class="form-control" name="products_name" placeholder="eg: Infinix Smart, CRV 345">
            </div>
            <br>
                 <div class="form-group">
                @php( $categories = \App\Models\Categories::all() )

                <label for="category"> <strong> Categories: </strong></label>
            <select class="form-control" name="categories_name" id="categories_name">
                @foreach ( $categories as $category )
                  <option value="{{ $category->categories_id }}">{{ $category->categories_name }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="products_image"><strong>Select a Product's Image: </strong></label>
            <input type="file" id="products_image" name="image">
        </div>
        <br>
        <div class="form-group">
           <label for="price"> <strong>Price:</strong></label>
           <input type="price" name="products_price">

        </div>
        <br>
        <div class="form-group">
            <label for="quantity"><strong>Quantity:</strong></label>
            <input type="number" id="quantity" name="products_quantity">
        </div>
        <br>
        <div class="form-group">
          <label for="description"><strong>Description:</strong></label>
            <textarea class="form-control" style="height:150px" name="products_description" placeholder="Product's Specifications"></textarea>
        </div>
        <br>
        <div class=" btn flex justify-center">
            <input type="submit" value="Add Product" class="btn btn-primary">
        </div>
        {{-- <div class="btn  flex justify-center ">
            <a class="btn btn-primary" href="purchases/{{$purchases->id}}/edit" role="button"> Edit  </a>


        </div> --}}

        </div>
    </form>






</section>
</div>

@endsection
