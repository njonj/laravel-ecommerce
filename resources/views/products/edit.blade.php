@extends('layouts.app')

@section('content')
@if ($errors->any())
   <div class="alert alert-danger">

     @foreach ($errors->all() as $error)
        <li class="text-red-500 list-none"{{ $error }}</li>
     @endforeach

   </div>
@endif

<div class="m-auto w-4/8 py-24">
<div class="text-center">
    <h1 class="text-5xl upperclass bold">
        Update Sale
    </h1>
</div>
</div>
<div class="container">

<div class="flex justify-center pt-20">

    {!! Form::open([ 'action' => '{{ route('products.edit', $products_id ) }}', 'method' => 'post', 'enctype' => "multipart/form-data"]) !!}
@method('PUT')
    <div class="form-group ">
        @php( $vendors = \App\Models\Vendors::all() )
    <label for="username"> <strong>Username:</strong> </label>
    <input type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus" id="floatingInput" placeholder="hcee4,nyto78">
    </div>
    <div class="form-group">
        <label for="products_name"><strong>Name:</strong></label>
        {{ Form::text('products_name','',['class' => 'form-control', 'placeholder' => 'Eg: Infinix Smart 5, CRV 345']) }}
    </div>
         <div class="form-group">
        @php( $categories = \App\Models\Categories::all() )
        @php( $vendors = \App\Models\Vendors::all() )
        <label for="category"> <strong> Categories:</strong></label>
    <select class="form-control" name="categories_name" id="categories_name">
        @foreach ( $categories as $category )
          <option value="{{ $category->categories_id }}">{{ $category->categories_name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
   {{ Form::file('image');}}
</div>
<div class="form-group">
   <label for="price"> <strong>Price:</strong></label>
{{ Form::text('products_price') }}
</div>
<div class="form-group">
    <label for="quantity"><strong>Quantity:</strong></label>
{{ Form::number('products_quantity', 'Value') }}
</div>
<div class="form-group">
  <label for="description"><strong>Description:</strong></label>
    {{ Form::textarea('products_description', '', ['class'=> 'form-control', 'placeholder' =>  'Describe the product']) }}
</div>
{{  Form::submit('Insert')  }}
<div class=" btn flex justify-center">

</div>
{{-- <div class="btn  flex justify-center ">
    <a class="btn btn-primary" href="purchases/{{$purchases->id}}/edit" role="button"> Edit  </a>


</div> --}}

</div>
{!! Form::close() !!}

</div>

@endsection
