@extends('layouts.app')

@section('title')
    Checkout
@endsection

@section('content')
    <div class="container mt-3 ">
        <form action="{{ url('place-order') }}" method="post">
            @csrf
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h6>Basic Details</h6>
                        <hr>
                        <div class="row checkout-form">
                        <div class="col-md-6">
                            <label for="">First Name:</label>
                            <input type="text" class="form-control" name="fname" placeholder="Enter First Name">
                            </div>
                        <div class="col-md-6">
                                <label for="">Last Name:</label>
                                <input type="text" class="form-control" name="lname" placeholder="Enter Last Name">
                                </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Email:</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter Email">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Phone Number:</label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Address:</label>
                            <input type="text" class="form-control" name="address" placeholder="Enter Address">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Zip Code:</label>
                            <input type="text" class="form-control" name="zipcode" placeholder="Enter Zip Code">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">State:</label>
                            <input type="text" class="form-control" name="state" placeholder="Enter State">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Province:</label>
                            <input type="text" class="form-control" name="province" placeholder="Enter Province">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                       <h6> Order Details</h6>
                        <hr>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <td>Name</td>
                                    <td>Quantity</td>
                                    <td>Price</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( Cart::content() as $cartItem )
                                <tr>
                                    <td>{{ $cartItem->name }}</td>
                                    <td>{{ $cartItem->qty }}</td>
                                    <td>{{ $cartItem->price }}</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
<hr>
                        <button class="btn btn-primary float-end" type="submit">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
@endsection
