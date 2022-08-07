@extends('layouts.app')

@section('content')

<div class="container-fluid mt-3">
    <!-- Carousel -->
    <div class="col-md-7 pt-4 pt-md-0">
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('/storage/images/car.jpeg') }}" alt="First slide">
            <div class="carousel-caption">
            <div class="pb-lg-5 mb-lg-5 text-center text-lg-start text-lg-nowrap">
                      <h3 class="h2 text-light fw-light pb-1 from-start">Has just arrived!</h3>
                      <h2 class="text-light display-5 from-start delay-1">Cars</h2>
                      <p class="fs-lg text-light pb-3 from-start delay-2">Jeep, Toyota, Volvo &amp; much more...</p>
                      <div class="d-table scale-up delay-4 mx-auto mx-lg-0"><a class="btn btn-primary" href="/categories/cars">Shop Now<i class="ci-arrow-right ms-2 me-n1"></i></a></div>
                    </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('/storage/images/laptop.jpeg') }}" alt="Second slide">
            <div class="carousel-caption">
            <div class="pb-lg-5 mb-lg-5 text-center text-lg-start text-lg-nowrap">
                      <h3 class="h2 text-light fw-light pb-1 from-start">Has just arrived!</h3>
                      <h2 class="text-light display-5 from-start delay-1">Laptops and Accessories</h2>
                      <p class="fs-lg text-light pb-3 from-start delay-2">Laptops, Chargers, Earbuds &amp; much more...</p>
                      <div class="d-table scale-up delay-4 mx-auto mx-lg-0"><a class="btn btn-primary" href="/categories/clothing">Shop Now<i class="ci-arrow-right ms-2 me-n1"></i></a></div>
                    </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('/storage/images/electronics.jpeg') }}" alt="Third slide">
            <div class="carousel-caption">
            <div class="pb-lg-5 mb-lg-5 text-center text-lg-start text-lg-nowrap">
                      <h3 class="h2 text-light fw-light pb-1 from-start">Has just arrived!</h3>
                      <h2 class="text-light display-5 from-start delay-1">Electronics</h2>
                      <p class="fs-lg text-light pb-3 from-start delay-2">Speakers, Televishions, Cameras &amp; much more...</p>
                      <div class="d-table scale-up delay-4 mx-auto mx-lg-0"><a class="btn btn-primary" href="/categories/kitchenware">Shop Now<i class="ci-arrow-right ms-2 me-n1"></i></a></div>
                    </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('/storage/images/xiaomi_redmi.jpeg') }}" alt="Third slide">
            <div class="carousel-caption">
             <div class="pb-lg-5 mb-lg-5 text-center text-lg-start text-lg-nowrap">
                      <h3 class="h2 text-light fw-light pb-1 from-start">Has just arrived!</h3>
                      <h2 class="text-light display-5 from-start delay-1">Phones and Tablets</h2>
                      <p class="fs-lg text-light pb-3 from-start delay-2">Huawei, Samsung, Xiaomi &amp; much more...</p>
                      <div class="d-table scale-up delay-4 mx-auto mx-lg-0"><a class="btn btn-primary" href="shop-grid-ls.html">Shop Now<i class="ci-arrow-right ms-2 me-n1"></i></a></div>
                    </div>
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


    </br>


    <main class="page-wrapper bg-dark">
        <h1>Products</h1>
    <section class="container-fluid pt-lg-3 mb-4 mb-sm-5">

      <div class="row">
              <!-- Banner with controls-->
        <div class="col-md-5">
                <div class="d-flex flex-column h-100 overflow-hidden rounded-3" style="background-color: #f6f8fb;">
                  <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                    <div>
                      <h3 class="mb-1">Cars</h3><a class="fs-md" href="/categories/cars">Shop for Automobils<i class="bi bi-caret-right fs-xs align-middle ms-1"></i></a>
                    </div>
                  </div><a class="d-none d-md-block mt-auto" href="/categories/cars"><img class="d-block w-100" src="{{ asset('/storage/images/car.jpeg') }}" alt="Cars"></a>
                </div>
        </div>


    {{-- <div class="row row-cols-1 row-cols-md-2 g-4"> --}}
      <div class="col">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
                      <h3 class="mb-1">Laptops </h3><a class="fs-md" href="shop-grid-ls.html">Shop for Laptops and Accessories<i class="bi bi-caret-right fs-xs align-middle ms-1"></i></a>
                    </div>
                  </div><a class="d-none d-md-block mt-auto" href="shop-grid-ls.html"><img class="d-block w-100" src="{{ asset('/storage/images/laptop.jpeg') }}" alt="For Men"></a>
                </div>
              </div>

      </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
    </div>
    <section class="main bg-dark">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-8 col-md-6">
              <span class="eyebrow text-muted">Shop by category</span>
              <h2>Trending Categories</h2>
            </div>
            <div class="col-4 col-md-6 text-right">
              <a href="" class="underlined">View More</a>
            </div>
          </div>
          <br>
          <div class="row gutter-1">
            <div class="col-6 col-lg-3">
              <a href="/categories/cars">
                <figure class="category category--alt">
                  <div class="equal"><span class="image" style="background-image: url('/storage/images/mm.jpg')"></span>
                </div>
                <figcaption>Cars</figcaption
                  </figure>
              </a>
            </div>
            <div class="col-6 col-lg-3">
              <a href="/categories/clothing">
                <figure class="category category--alt">
                  <div class="equal"><span class="image" style="background-image: url('/storage/images/mm.jpg')"></span></div>
                  <figcaption>Clothing</figcaption>
                </figure>
              </a>
            </div>
            <div class="col-6 col-lg-3">
              <a href="/categories/kitchenware">
                <figure class="category category--alt">
                  <div class="equal"><span class="image" style="background-image: url('/storage/images/mm.jpg')"></span></div>
                  <figcaption>Kitchenware</figcaption>
                </figure>
              </a>
            </div>
            <div class="col-6 col-lg-3">
              <a href="">
                <figure class="category category--alt">
                  <div class="equal"><span class="image" style="background-image: url('/storage/images/mm.jpg')"></span></div>
                  <figcaption>Jewelery</figcaption>
                </figure>
              </a>
            </div>
            <div class="col-6 col-lg-3">
              <a href="">
                <figure class="category category--alt">
                  <div class="equal"><span class="image" style="background-image: url('/storage/images/mm.jpg')"></span></div>
                  <figcaption>Blouses</figcaption>
                </figure>
              </a>
            </div>
            <br>

            {{-- <div class="col-6 col-lg-3">
              <a href="">
                <figure class="category category--alt">
                  <div class="equal"><span class="image" style="background-image: url('/storage/images/mm.jpg')"></span></div>
                  <figcaption>Swimwear</figcaption>
                </figure>
              </a>
            </div> --}}
            {{-- <div class="col-6 col-lg-3">
              <a href="">
                <figure class="category category--alt">
                  <div class="equal"><span class="image" style="background-image: url('/storage/images/mm.jpg')"></span></div>
                  <figcaption>Bodysuit</figcaption>
                </figure>
              </a>
            </div> --}}
            {{-- <div class="col-6 col-lg-3">
              <a href="">
                <figure class="category category--alt">
                  <div class="equal"><span class="image" style="background-image: url('/storage/images/mm.jpg')"></span></div>
                  <figcaption>Sunglass</figcaption>
                </figure>
              </a>
            </div> --}}
          </div>
        </div>
      </section>

    </main>

    {{-- <div class="album py-5 bg-light">
        <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        @foreach ($products as $product )

        <div class="col">
            <div class="card shadow-sm">

                <a href="/products/show"><img   src="{{ asset('/sales/'.$product->products_image) }}" alt=""></a>
              <img  class="card-img-top" width="100%" height=225  src="{{ asset ('/storage/images/comp.jpg') }}" alt="laptop" title="laptop">

              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                      <a href="btn btn-link">View</a>
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

                  </div>
                  <small class="text-muted">{{ $products->products_price }}</small>
          </div>
            </div>
          </div>








                    {{-- <div class="col-sm">
                        <a class="btn btn-primary" href="/sales/{{ $products->id }}/edit">Edit</a>
                        <a class="btn btn-danger" href="/sales/{{ $products->id }}/delete">Delete</a>
                    </div> --}}
                    {{-- </div>

    @endforeach
                {{-- </div> --}}




@endsection
