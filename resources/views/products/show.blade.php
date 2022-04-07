@extends('layouts.app')

@section('content')
<section class="py-1">
<div class="container overflow-hidden">
    <div class="row gx-5">
        {{-- @if (is_array($products) || is_object($products)) --}}
 @foreach ($products as $product)
        <div class="col">
            <div class="p-5 border bg-light">
                <img class="img-thumbnail" src="{{  asset('/sales/'.$product->products_image) }}" alt="">
            </div>
           </div>
           <div class="col">
             <div class="p-3 border bg-light">
<h6  style="color: orange"><bold>{{  $product->products_price }}</bold></h6>
<button class="primary">Add to Cart</button>
             </div>
           </div>
           <div class="row g-2">
            <div class="col">
              <div class="p-3 border bg-light">
                  <table>

                    <thead>
                        <tr>
                            <th scope="col">Description</th>
                            <th scope="col">Reviews</th>
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

           {{-- <table style="border-color: #ffffff; border-width: 1px; background-color: #ffffff; border-style: solid;" border="1" cellspacing="0" cellpadding="0">
            <tbody>
            <tr>
            <td style="border-color: #ffffff; background-color: #ffffff; width: 74px; border-style: solid; border-width: 1px;" valign="top">
            <p></p>
            <p><span style="color: #d4376d;"><strong>Display</strong></span></p>
            <p><span style="color: #d4376d;"><strong>&nbsp;</strong></span></p>
            </td>
            <td style="border-color: #ffffff; background-color: #ffffff; width: 74px; border-style: solid; border-width: 1px;" valign="top">
            <p>&nbsp;</p>
            <p>5.5’’</p>
            </td>
            </tr>
            <tr>
            <td style="border-color: #ffffff; background-color: #ffffff; width: 74px; border-style: solid; border-width: 1px;" valign="top">
            <p><span style="color: #d4376d;"><strong>Camera&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></span></p>
            <p><span style="color: #d4376d;"><strong>&nbsp;</strong></span></p>
            </td>
            <td style="border-color: #ffffff; background-color: #ffffff; width: 74px; border-style: solid; border-width: 1px;" valign="top">
            <p>5MP Front Camera</p>
            <p>5MP Back Camera</p>
            </td>
            </tr>
            <tr>
            <td style="border-color: #ffffff; background-color: #ffffff; width: 74px; border-style: solid; border-width: 1px;" valign="top">
            <p><span style="color: #d4376d;"><strong>Memory</strong></span></p>
            <p><span style="color: #d4376d;"><strong>&nbsp;</strong></span></p>
            </td>
            <td style="border-color: #ffffff; background-color: #ffffff; width: 74px; border-style: solid; border-width: 1px;" valign="top">
            <p>RAM: 1GB</p>
            <p>ROM:16GB</p>
            </td>
            </tr>
            <tr>
            <td style="border-color: #ffffff; background-color: #ffffff; width: 74px; border-style: solid; border-width: 1px;" valign="top">
            <p><span style="color: #d4376d;"><strong>Network</strong></span></p>
            </td>
            <td style="border-color: #ffffff; background-color: #ffffff; width: 74px; border-style: solid; border-width: 1px;" valign="top">
            <p>Sim Type – Single Sim</p>
            </td>
            </tr>
            <tr>
            <td style="border-color: #ffffff; background-color: #ffffff; width: 74px; border-style: solid; border-width: 1px;" valign="top">
            <p><span style="color: #d4376d;"><strong>OS</strong></span></p>
            <p><span style="color: #d4376d;"><strong>&nbsp;</strong></span></p>
            </td>
            <td style="border-color: #ffffff; background-color: #ffffff; width: 74px; border-style: solid; border-width: 1px;" valign="top">
            <p>Android</p>
            </td>
            </tr>
            <tr>
            <td style="border-color: #ffffff; background-color: #ffffff; width: 74px; border-style: solid; border-width: 1px;" valign="top">
            <p><span style="color: #d4376d;"><strong>Battery</strong></span></p>
            <p><span style="color: #d4376d;"><strong>&nbsp;</strong></span></p>
            </td>
            <td style="border-color: #ffffff; background-color: #ffffff; width: 74px; border-style: solid; border-width: 1px;" valign="top">
            <p>2500mAh</p>
            </td>
            </tr>
            <tr>
            <td style="border-color: #ffffff; background-color: #ffffff; width: 74px; border-style: solid; border-width: 1px;" valign="top">
            <p><span style="color: #d4376d;"><strong>Warranty</strong></span></p>
            </td>
            <td style="border-color: #ffffff; background-color: #ffffff; width: 74px; border-style: solid; border-width: 1px;" valign="top">
            <p>1 year</p>
            </td>
            </tr>
            </tbody>
            </table> --}}
@endforeach
{{-- @endif --}}
    </div>
</div>
</section>
@endsection
