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
    
    <div>
        @if ($product->products_quantity > 0)
           <label for="badge ba-success">In Stock</label>
        @else
            <label for="badge bg-danger">Out of Stock</label>
        @endif
    </div>
    <div class="py-3">
    <div class="row">


        <form action="{{ route('addcart', $product->products_id) }}" method="post" enctype="multipart/form-data">
            @csrf

            <input type="number" value="1" min="1" class="form-control" style="width: 100px" name="quantity">
            <br>
                <input type="submit" value=" Add To Cart" class="btn btn-success btn-xs">



    </form>
             </div>
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





