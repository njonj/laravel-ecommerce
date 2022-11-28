@extends('layouts.app')

@section('content')


<div class="container mt-3">
<div class="row">


<!--- Carousel--->
<div class="col-md-7 pt-4 pt-md-0">


    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          {{-- <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button> --}}
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('/storage/images/product.jpg') }}" alt="First slide">
            <div class="carousel-caption">
            <div class="pb-lg-5 mb-lg-5 text-center text-lg-start text-lg-nowrap">
                      <h3 class="h2 text-light fw-light pb-1 from-start">Has just arrived!</h3>
                      <h2 class="text-light display-5 from-start delay-1">Phones and Tablets</h2>
                      <p class="fs-lg text-light pb-3 from-start delay-2">Huawei, Nokia, Samsung &amp; much more...</p>
                      <div class="d-table scale-up delay-4 mx-auto mx-lg-0"><a class="btn btn-primary" href="/categories/phones">Shop Now<i class="ci-arrow-right ms-2 me-n1"></i></a></div>
                    </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('/storage/images/Dell.jpg') }}" alt="Second slide">
            <div class="carousel-caption">
            <div class="pb-lg-5 mb-lg-5 text-center text-lg-start text-lg-nowrap">
                      <h3 class="h2 text-light fw-light pb-1 from-start">Has just arrived!</h3>
                      <h2 class="text-light display-5 from-start delay-1">Laptops and Accessories</h2>
                      <p class="fs-lg text-light pb-3 from-start delay-2">Laptops, Chargers, Earbuds &amp; much more...</p>
                      <div class="d-table scale-up delay-4 mx-auto mx-lg-0"><a class="btn btn-primary" href="/categories/laptops">Shop Now<i class="ci-arrow-right ms-2 me-n1"></i></a></div>
                    </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('/storage/images/Sony.jpg') }}" alt="Third slide">
            <div class="carousel-caption">
            <div class="pb-lg-5 mb-lg-5 text-center text-lg-start text-lg-nowrap">
                      <h3 class="h2 text-light fw-light pb-1 from-start">Has just arrived!</h3>
                      <h2 class="text-light display-5 from-start delay-1">Electronics</h2>
                      <p class="fs-lg text-light pb-3 from-start delay-2">Speakers, Televishions, Cameras &amp; much more...</p>
                      <div class="d-table scale-up delay-4 mx-auto mx-lg-0"><a class="btn btn-primary" href="/categories/electronics">Shop Now<i class="ci-arrow-right ms-2 me-n1"></i></a></div>
                    </div>
            </div>
          </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
    </div>
    </div>
    <hr>
    <main class="page-wrapper bg-dark">
        <h1>Products</h1>
    <section class="container-fluid pt-lg-3 mb-4 mb-sm-5">

      <div class="row">
              <!-- Banner with controls-->
        <div class="col-md-5">
                <div class="d-flex flex-column h-100 overflow-hidden rounded-3" style="background-color: #f6f8fb;">
                  <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                    <div>
                      <h3 class="mb-1">Phones and Tablets</h3><a class="fs-md" href="/categories/phones">Shop for Phones and Tablets<i class="bi bi-caret-right fs-xs align-middle ms-1"></i></a>
                    </div>
                  </div><a class="d-none d-md-block mt-auto" href="/categories/phones"><img class="d-block w-100" src="{{ asset('/storage/images/product.jpg') }}" alt="Cars"></a>
                </div>
        </div>


    {{-- <div class="row row-cols-1 row-cols-md-2 g-4"> --}}
      <div class="col-md-2">
        <div class="card" >
            <img src="{{  asset('/storage/images/port1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Port 1</h5>
              <p class="card-text">Kshs 500</p>
            </div>
          </div>


      </div>
      <div class="col-md-2">
        <div class="card" >
          <img src="{{ asset('storage/images/port2.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Port 2</h5>
            <p class="card-text">Kshs 1000</p>
          </div>
        </div>
      </div>

      <div class="col-md-2">
        <div class="card" >
          <img src="{{ asset('storage/images/port3.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Port 3</h5>
            <p class="card-text">Kshs 200</p>
          </div>
        </div>
      </div>
    {{-- </div> --}}
      </div>
    </section>

    <section class="container pt-lg-4 mb-4 mb-sm-5">
            <div class="row">
              <!-- Banner with controls-->
              <div class="col-md-5 order-md-2">
                <div class="d-flex flex-column h-100 overflow-hidden rounded-3" style="background-color: #f6f8fb;">
                  <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                    <div class="order-md-2">
                      <h3 class="mb-1">Laptops and Accessories </h3><a class="fs-md" href="/categories/laptops">Shop for Laptops and Accessories<i class="bi bi-caret-right fs-xs align-middle ms-1"></i></a>
                    </div>
                  </div><a class="d-none d-md-block mt-auto" href="/categories/laptops"><img class="d-block w-100" src="{{ asset('/storage/images/Dell.jpg') }}" alt="For Men"></a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="card">
                    <img src="{{  asset('/storage/images/port1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Port 1</h5>
                      <p class="card-text">Kshs 500</p>
                    </div>
                  </div>


              </div>
              <div class="col-md-2">
                <div class="card">
                  <img src="{{ asset('storage/images/port2.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Port 2</h5>
                    <p class="card-text">Kshs 1000</p>
                  </div>
                </div>
              </div>

              <div class="col-md-2">
                <div class="card">
                  <img src="{{ asset('storage/images/port3.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Port 3</h5>
                    <p class="card-text">Kshs 200</p>
                  </div>
                </div>
              </div>
            </div>

   </section>

<section class="container-fluid pt-lg-3 mb-4 mb-sm-5">

    <div class="row">
            <!-- Banner with controls-->
      <div class="col-md-5">
              <div class="d-flex flex-column h-100 overflow-hidden rounded-3" style="background-color: #f6f8fb;">
                <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                  <div>
                    <h3 class="mb-1">Electronics</h3><a class="fs-md" href="/categories/electronics">Shop for Electronics<i class="bi bi-caret-right fs-xs align-middle ms-1"></i></a>
                  </div>
                </div><a class="d-none d-md-block mt-auto" href="/categories/electronics"><img class="d-block w-100" src="{{ asset('/storage/images/sony.jpg') }}" alt="Cars"></a>
              </div>
      </div>


  {{-- <div class="row row-cols-1 row-cols-md-2 g-4"> --}}
    <div class="col-md-2 ">
        <div class="card">
            <img src="{{  asset('/storage/images/port1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Port 1</h5>
              <p class="card-text">Kshs 500</p>
            </div>
          </div>


      </div>
      <div class="col-md-2 ">
        <div class="card">
          <img src="{{ asset('storage/images/port2.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Port 2</h5>
            <p class="card-text">Kshs 1000</p>
          </div>
        </div>
      </div>

      <div class="col-md-2">
        <div class="card">
          <img src="{{ asset('storage/images/port3.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Port 3</h5>
            <p class="card-text">Kshs 200</p>
          </div>
        </div>
      </div>
  {{-- </div> --}}
    </div>
  </section>
    </main>

</div>
<hr>
@endsection



