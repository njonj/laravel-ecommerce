@extends('seller.seller_master')

@section('seller')
<div class="container">
    <!-- table area -->
    <section class="table_area">
       <!-- products -->
       <div class="panel">
        <div class="panel_header">

            <div class="panel_title"><span> <strong>Products</strong> </span></div>
        </div>
        <div class="panel_body">
            {{-- @foreach ($user as $item) --}}


            <div class="table-responsive">
                <table class="table table-bordered">

                    <thead>
                      <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Actions</th>

                      </tr>
                  </thead>

                  <tbody>
                    @foreach ($products as $item)
                      <tr>
                          <td>{{  $item->products_id }}</td>
                          <td>{{ $item->products_name }}</td>
                          <td>{{ $item->products_price }}</td>
                          <td>{{ $item->products_quantity }}</td>
                          <td>
                            <div class="d-flex">
                            <a href="{{ route ('products.edit', $item->products_id) }}" class="btn btn-primary m-1"><i class="bi bi-pencil-square"></i></a>
                            <form action="{{ route('products.destroy', $item->products_id ) }}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button class="btn btn-danger m-1"><i class="bi bi-trash3"></i></button>
                            </form>
                            </div>
                          </td>
                      </tr>
                  </tbody>
                     @endforeach
                </table>
            </div>
        </div>
    </div> <!-- /table -->
<!-- /products -->

        <!-- chart area -->
        <div class="row">
            <div class="col-lg-8">
                <div class="panel chart_area">
                    <div class="panel_header">
                        <div class="panel_title">
                            <span class="panel_icon"><i class="far fa-chart-bar"></i></span>
                            <span>bar chat</span>
                        </div>
                    </div>
                    <div class="panel_body">
                        <div id="bar-chart">
                            <div id="bar-legend"></div>
                            <canvas id="bar-canvas" ></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel">
                    <div class="panel_header">
                        <div class="panel_title">
                            <span class="panel_icon"><i class="fas fa-chart-pie"></i></span>
                            <span>pie chat</span>
                        </div>
                    </div>
                    <div class="panel_body">
                        <div id="piechart"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div><!--/middle content wrapper-->
</div><!--/ content wrapper -->
@endsection
