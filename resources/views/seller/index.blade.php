@extends('seller.seller_master')

@section('seller')
<div class="middle_content_wrapper">
    <!-- counter_area -->
    <section class="counter_area">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="counter">
                    <div class="counter_item">
                         <span><i class="fa fa-code"></i></span>
                          <h2 class="timer count-number" data-to="300" data-speed="1500"></h2>
                    </div>

                   <p class="count-text ">SomeText GoesHere</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="counter">
                    <div class="counter_item">
                        <span><i class="fa fa-coffee"></i></span>
                         <h2 class="timer count-number" data-to="1700" data-speed="1500"></h2>
                    </div>
                    <p class="count-text ">SomeText GoesHere</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="counter">
                    <div class="counter_item">
                        <span><i class="fas fa-user"></i></span>
                         <h2 class="timer count-number" data-to="11900" data-speed="1500"></h2>
                    </div>
                    <p class="count-text ">SomeText GoesHere</p>

                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="counter">
                    <div class="counter_item">
                        <span><i class="fa fa-bug"></i></span>
                         <h2 class="timer count-number" data-to="157" data-speed="1500"></h2>
                    </div>
                     <p class="count-text ">SomeText GoesHere</p>
                </div>
            </div>
        </div>
    </section>
    <!--/ counter_area -->
    <!-- table area -->
    <section class="table_area">
        <div class="panel">
            <div class="panel_header">
                <div class="panel_title"><span>FooTable with row toggler, sorting, filter and pagination</span></div>
            </div>
            <div class="panel_body">
                {{-- @foreach ($user as $item) --}}


                <div class="table-responsive">
                    <table class="table table-bordered">

                        <thead>
                          <tr>
                              
                              <th>Name</th>
                              <th>Image</th>
                              <th>Quantity</th>
                              <th>Price</th>
                              <th data-hide="all">Actions</th>
                          </tr>
                      </thead>

                      <tbody>
                        @foreach ($products as $item)
                          <tr>
                              <td>{{  $item->products_name }}</td>
                              <td>{{ $item->products_image }}</td>
                              <td>{{ $item->products_quantity }}</td>
                              <td>{{ $item->products_price }}</td>
                              <td>
                              <div class="d-flex">
                                <a href="{{ route ('products.edit', $product->products_id) }}" class="btn btn-primary m-1">Edit</a>
            
                                <form action="{{ route('products.destroy', $product->products_id ) }}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class="btn btn-danger m-1">Delete</button>
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
