@extends('layouts.app')
@section('content')


<div class="container d-flex justify-content-center">
    <div class="card mt-5 px-3 py-4">
      <div class="d-flex flex-row justify-content-around">
        <div class="mpesa"><bold> Mpesa </bold></div>
      </div>
      <div class="media mt-4 pl-2">
        <img src="{{ asset('/storage/images/mpesa.png') }}" class="mr-3" height="75" alt="" style="position: justify-centre;">
        <div class="media-body">
          <h6 class="mt-1">Enter Amount & Number</h6>
        </div>
      </div>
      <div class="media mt-3 pl-2">
                        <!--bs5 input-->
          <form class="row g-3" action="{{ route('stkpush') }}" method="POST">

              <div class="col-12">
                <label for="inputAddress" class="form-label">Amount</label>
                <input type="text" class="form-control" name="amount" placeholder="Enter Amount">
              </div>
              <div class="col-12">
                <label for="inputAddress2" class="form-label" >Phone Number</label>
                <input type="text" class="form-control" name="phone"  placeholder="Enter Phone Number">
              </div>

              <div class="col-12">
                <button type="submit" class="btn btn-success" name="submit" value="submit">Pay Now</button>
              </div>
            </form>
            <!--bs5 input-->
        </div>
      </div>
    </div>
  </div>
@endsection
