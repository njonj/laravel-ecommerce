@extends('layouts.app')

@section('content')





  {{-- <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="{{ asset('/storage/images/comp.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="{{ asset('/storage/images/port2.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('/storage/images/port1.jpg') }}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> --}}

</br>

  <main class="main bg-dark">
    <h1>Products</h1>


    <section class="py-1">
      <div class="container-full">
        <div class="row gutter-1">
          <div class="col-md-6">
            <div class="card card-tile">
              <figure class="card-image equal vh-75">
                <span class="image" style="background-image: url('/storage/images/comp.jpg')"></span>
              </figure>
              <div class="card-footer p-lg-5">
                <div class="bg-white d-inline-block p-3">
                  <h2 class="card-title"><span class="d-block text-gray">Feel the summer</span> New Bag 1913</h2>
                  <a href="" class="underlined">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-tile">
              <figure class="card-image equal vh-75">
                <span class="image" style="background-image:  url('/storage/images/folio.jpg') "></span>
              </figure>
              <div class="card-footer p-lg-5">
                <div class="bg-white d-inline-block p-3">
                  <h2 class="card-title"><span class="d-block text-gray">Feel the summer</span> New Collection</h2>
                  <a href="" class="underlined">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
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
              <a href="">
                <figure class="category category--alt">
                  <div class="equal"><span class="image" style="background-image: url('/storage/images/mm.jpg')"></span></div>
                  <figcaption>Skirt</figcaption>
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
