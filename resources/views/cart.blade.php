@extends('layouts.app')

@section('content')

<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width: 50%">Product</th>
            <th style="width: 10%">Price</th>
            <th style="width: 8%">Quantity</th>
            <th style="width: 22%" class="text-center">Subtotal</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $total = 0 ?>

        @if (session('cart'))
        @foreach (session('cart') as $id => $details)

        <?php $total += $details['price'] * $details['quantity'] ?>
            
        
        <tr>
            <td data-th="Product">
                <div class="row">
                <div class="col-sm-3 hidden-xs">
                    <img src="{{ $details['image'] }}" class="img-responsive">
                </div>
                    <div class="col-sm-9">
                    <h4 class="nomargin">{{ $details['name'] }}</h4>
                </div>
                </div>
            </td>
            <td data-th="Price">{{ $details['price'] }}</td>
            <td data-th="Quantity"><input type="number" class="form-control quantity" value="{{ $details['quantity'] }}"></td>
<td data-th="Subtotal" class="text-center">Kshs {{ $details['price'] * $details['quantity']}}</td>
<td class="actions" data-th="">
    <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="bi bi-123"></i></button>
    <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="bi bi-trash3"></i></button>
</td>
        </tr>
        @endforeach
            
        @endif
    </tbody>
 
    <tfoot>
        <tr class="visible-xs">
            <td class="text-center"><strong>Total: Kshs {{ $total }}</strong></td>
        </tr>
        <tr><a href="{{ url('/products') }}" class="btn btn-warning"><i class="bi bi-caret-left-fill"></i>Continue Shopping</a>
<td colspan="2" class="hidden-xs"></td>
<td class="hidden-xs text-center"><strong>Total: </strong></td>
        </tr>

    </tfoot>
</table>
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
