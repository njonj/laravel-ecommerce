@extends('layouts.app')
@section('content')
@if (session()->has('message'))
<div class="alert alert-success">

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>

    {{ session()->get('message') }}
</div>



@endif

<div class="container">
	    <div class="row">

		<form method="POST" action="{{  url('/order') }}" >
			@csrf
		    <table class="table table-hover table-striped">

		        <thead>
		        <tr class="thead-dark">

                    {{-- <th>Image</th> --}}
		            <th>Name</th>
                   <th>Quantity</th>
		            <th>Amount</th>
                    <th>Action</th>

		        </tr>
		    </thead>
		        <tbody>

                @foreach($orders as $order)
		            <tr>
		                {{-- <td><input type="checkbox" name="item[]" value="{{$cart['id']}}" onchange="Cal()" /></td> --}}
                        {{-- <td><img src="{{ asset('sales/') }}/{{$cart->image}}" alt="" width="50"></td> --}}
		                <td style="max-width:300px">
<input type="text" name="productname[]" value="{{ $order->products_name }}" hidden="">


		                    {{ $order->products_name }}
		                </td>


                        <td>
                            <input type="text" name="quantity[]" value="{{ $order->quantity }}" hidden="">

                            {{ $order->quantity }}</td>


         <td>
            <input type="text" name="price[]" value="{{ $order->price }}" hidden="">

            {{ $order->price }}</td>
         <td>
            {{-- <a href="{{ route('delete',$order->id) }}" onclick="return confirm('Are You Sure')" class="btn btn-danger"> <i class="bi bi-trash3"> Remove</a> --}}
         </td>
		            </tr>
                @endforeach

		        </tbody>

		    </table>

<a href="{{ route('cartcheck') }}" class="btn btn-outline-success">Checkout</a>


        </form>

            {{-- <tr><a href="{{ url('/products') }}" class="btn btn-warning"><i class="bi bi-caret-left-fill"></i>Continue Shopping</a> --}}
                {{-- <td colspan="2" class="hidden-xs"></td>	 --}}

	</div>
    </div>
@endsection

