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

                @foreach($cart as $carts)
		            <tr>
		                {{-- <td><input type="checkbox" name="item[]" value="{{$cart['id']}}" onchange="Cal()" /></td> --}}
                        {{-- <td><img src="{{ asset('sales/') }}/{{$cart->image}}" alt="" width="50"></td> --}}
		                <td style="max-width:300px">
<input type="text" name="productname[]" value="{{ $carts->products_name }}" hidden="">


		                    {{ $carts->products_name }}
		                </td>


                        <td>
                            <input type="text" name="quantity[]" value="{{ $carts->quantity }}" hidden="">

                            {{ $carts->quantity }}</td>


         <td>
            <input type="text" name="price[]" value="{{ $carts->price }}" hidden="">

            {{ $carts->price }}</td>
         <td>
            <a href="{{ route('delete',$carts->id) }}" onclick="return confirm('Are You Sure')" class="btn btn-danger"> <i class="bi bi-trash3"> Remove</a>
         </td>
		            </tr>
                @endforeach

		        </tbody>

		    </table>

<button class="btn btn-success">Place Order</button>


        </form>

            {{-- <tr><a href="{{ url('/products') }}" class="btn btn-warning"><i class="bi bi-caret-left-fill"></i>Continue Shopping</a> --}}
                {{-- <td colspan="2" class="hidden-xs"></td>	 --}}

	</div>
    </div>
@endsection

@section('scripts')

    <script type="text/javascript">
    $(".update-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

       $.ajax({
            url: "{{ url('update-cart') }}",
            method: "patch",
            data: {_token: '{{ csrf_token() }}', id:ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();



            }
        });

    });

    $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
@endsection
