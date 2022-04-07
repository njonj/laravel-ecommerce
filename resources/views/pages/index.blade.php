@extends('layouts.app')

@section('content')

<div class="slideshow-container">
    <div class="mySlides fade">
        <div class="numbertext">1 / 4</div>
        <img src="{{ asset('/storage/images/port4.jpg') }}" alt="port4" width="auto" height="auto" >

        <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 4</div>
        <img src="{{ asset ('/storage/images/nn.jpg') }}" alt="nn" width="auto" height="auto" >
        <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 4</div>
    <img src="{{ asset ('/storage/images/comp.jpg') }}" alt="comp" width="auto" height="auto" >

        <div class="text">Caption Three</div>
    </div>
</div>
<div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <img src="{{ asset ('/storage/images/mm.jpg') }}" alt="skills" width="auto" height="auto" >

    <div class="text">Caption Four</div>
</div>
</div>

<br />

<div style="text-align: center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(
                " active",
                ""
            );
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>

<h1>Sales</h1>


  <div class="album py-5 bg-light">
<div class="container">
    {{-- <div class="row"> --}}
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
{{---------------------- card section starts here ------------------------------------------------------------------}}
<div class="col">
    <div class="card shadow-sm">
      <img  class="card-img-top" width="100%" height=225  src="{{ asset ('/storage/images/comp.jpg') }}" alt="laptop" title="laptop">

      <div class="card-body">
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
              <a href="btn btn-link">View</a>
            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
          </div>
          <small class="text-muted">9 mins</small>
        </div>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card shadow-sm">

                      <img  class="card-img-top" width="100%" height="225" src="{{ asset ('/storage/images/nn.jpg') }}" alt="nina" title="nn">

      <div class="card-body">
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
          </div>
          <small class="text-muted">9 mins</small>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card shadow-sm">
       <img   class="card-img-top" width="100%" height="225"  src="{{ asset ('/storage/images/about-img.jpg') }}" alt="about" title="about-image">

      <div class="card-body">
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
          </div>
          <small class="text-muted">9 mins</small>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card shadow-sm">
       <img   class="card-img-top" width="100%" height="225"  src="{{ asset ('/storage/images/about-img.jpg') }}" alt="about" title="about-image">

      <div class="card-body">
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
          </div>
          <small class="text-muted">9 mins</small>
        </div>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card shadow-sm">
<img  class="card-img-top" width="100%" height="225" src="{{ asset ('/storage/images/nn.jpg') }}" alt="nina" title="nn">


      <div class="card-body">
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
          </div>
          <small class="text-muted">9 mins</small>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card shadow-sm">
<img  class="card-img-top" width="100%" height=225  src="{{ asset ('/storage/images/comp.jpg') }}" alt="laptop" title="laptop">


      <div class="card-body">
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
          </div>
          <small class="text-muted">9 mins</small>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card shadow-sm">
<img  class="card-img-top" width="100%" height=225  src="{{ asset ('/storage/images/comp.jpg') }}" alt="laptop" title="laptop">


      <div class="card-body">
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
          </div>
          <small class="text-muted">9 mins</small>
        </div>
              {{-- <div class="col sm-3 rounded-lg"> --}}
{{---------------------- card section ends here ------------------------------------------------------------------}}

</div>
      </div>
    </div>



@endsection
