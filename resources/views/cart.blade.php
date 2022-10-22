@extends('layouts.app')
@section('content') 

<script>
function Cal() {
	
	var prices = document.getElementsByName('price[]');
	
	var total=0;
	
	var cboxes = document.getElementsByName('item[]');    
	var len = cboxes.length;	    
	for (var i=0; i<len; i++) {        
		if(cboxes[i].checked){	//calculate if checked		
			subtotal=parseFloat(prices[i].value)+parseFloat(total);	}					
	}
	
	
	total=subtotal+total;
	
	document.getElementById('amount').value=total.toFixed(2);
}
</script>

<div class="container">
	    <div class="row">

		<form   method="post" action="" >
			{{ csrf_field() }}
		    <table class="table table-hover table-striped">
				
		        <thead>
		        <tr class="thead-dark">
		            <th>ID</th>
                    <th>Image</th>
		            <th>Name</th>
                   <th>Quantity</th>
		            <th>Amount</th>
                    <th>Action</th>
		        </tr>
		    </thead>
		        <tbody>	
                    @if (session('cart'))
                @foreach($carts as $key => $cart)
		            <tr>
		                <td><input type="checkbox" name="item[]" value="{{$cart['id']}}" onchange="Cal()" /></td>
                        <td><img src="{{ asset('sales/') }}/{{$cart->image}}" alt="" width="50"></td>
		                <td style="max-width:300px">
		                    <h6>{{$cart->name}}</h6>		                   
		                </td>
		                

                        <td>{{$cart->qty}}</td>
						@php
							$subtotal = $cart->qty*$cart->price;
						@endphp

                        <td>{{$subtotal}}</td>
						<input type="hidden" value="{{$subtotal}}" name="price[]" id="price[]"/>

		                <td>
		                    <a href="" class="btn btn-warning"><i class="fas fa-edit">Edit</i></a> | 
		                    <a href="" class="btn btn-danger" onclick="return confirm('Confirm Delete?')">Delete</a>
		                </td>
		            </tr> 
                @endforeach
                @endif
				 
				<tr class="thead-dark">
		        <td>&nbsp;</td>
                <td>&nbsp;</td>
		        <td>&nbsp;</td>  
                <td>&nbsp;</td>                 
		        <td>Total</td>
		        <td><input type="text" name="amount" id="amount" value=""></td>
                <td><input type="submit" name="checkout" value="Checkout"></td>
		    </tr>
		</form>	
				
		        </tbody>
			
		    </table>
		
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
