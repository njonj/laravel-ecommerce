<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('panel/assets/images/favicon.png') }}" >

    <title> {{ config('app.name',  'Sales') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>

body{
background-color: #f5eaea
}
        .sidebar {
          height: 100%;
          width: 160px;
          position: fixed;
          z-index: 5;
          top: 0;
          left: 0;
          background-color: #111;
          overflow-x: hidden;
          padding-top: 16px;
        }

        .sidebar a {
          padding: 6px 8px 6px 16px;
          text-decoration: none;
          font-size: 20px;
          color: #818181;
          display: block;
        }

        .sidebar a:hover {
          color: #f1f1f1;
        }
.carousel slide{
    margin-left: 110px;
    padding: 0px 10px;
}
table {
    display: table;
    border-collapse: separate;
}
        .main {
          margin-left: 85px; /* Same as the width of the sidenav */
          padding: 0px 10px;

        }
        footer{
            margin-left: 20px;
            padding: 0px 10px;
        }

        @media screen and (max-height: 450px) {
          .sidebar {padding-top: 15px;}
          .sidebar a {font-size: 18px;}
        }
        body > section, body > footer, body > article {
    position: relative;
    margin: auto;
    padding: 5rem ;
}
.row:not(:last-child) {
    margin-bottom: 2.5rem;
}
.align-items-end {
    align-items: flex-end !important;
}
.col-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
}
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px;
}
*, *::before, *::after {
    box-sizing: border-box;
}
        .section{
            display: block;
        }
.container-full{
    width: 100%;
    overflow: hidden;
}
.gutter-1{
    margin: -5px;

}

.row{
    display: flex;
    grid-template-columns: repeat(3, 800px);
    justify-content: center;
}
.gutter-1 > *{
   gap: 15px;
   margin-bottom: 50px;

.card{
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid #e9e9e9;
}
.card-title {
    margin-bottom: 0.9375rem;
}
h2, .h2 {
    font-size: 2rem;}
    .card-image {
    position: relative;
    flex-shrink: 0;
}

@media (max-width: 1199.98px)
[class*="vh-"] {
    height: auto !important;
}
.vh-75 {
    height: 75vh;
    min-height: 75vh;
}
.equal {
    position: relative;
    display: block;
    overflow: hidden;
}
figure {
    margin: 0;
}
figure {
    margin: 0 0 1rem;
}
.figure{
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 40px;
    margin-inline-end: 40px;
}
.image{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-size: cover;
    background-position: center;
}
.card-image{
    position: relative;
    flex-shrink: 0;
}
.main {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 auto;
    flex: 1 0 auto;


}
.image::after {
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    transition: all 0.2s;
    -webkit-transition-delay: 0s;
    -moz-transition-delay: 0s;
    transition-delay: 0s;
    opacity: 0;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    content: "";
}
.category {
    position: relative;
    overflow: hidden;
}

.equal {
    position: relative;
    display: block;
    overflow: hidden;
}
.equal::before {
    display: block;
    content: "";
    width: 100%;
    padding-top: 100%;
}
.category {
    position: relative;
    overflow: hidden;
}
.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl, .col-xl-auto {
    position: relative;
    /* width: auto; */
    padding-right: 5px;
    padding-left: 5px;
}

.eyebrow {
    display: inline-block;
    font-size: 0.75rem;
    font-family: "Lato", sans-serif;
    font-weight: 400;
    text-transform: uppercase;
    letter-spacing: .1em;
}
.category figcaption {
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    transition: all 0.2s;
    -webkit-transition-delay: 0s;
    -moz-transition-delay: 0s;
    transition-delay: 0s;
    display: block;
    width: 100%;
    padding: 0.9375rem 1.875rem;
    background: #ECE8E5;
    color: #000;
    text-align: center;
}
.text-muted {
    color: #777777 !important;
}
.text-right {
    text-align: right !important;
}
.col-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
}
.underlined {
    position: relative;
}

a {
    color: #4d4646;
    text-decoration: none;
    background-color: transparent;
}



.image::after {
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    transition: all 0.2s;
    -webkit-transition-delay: 0s;
    -moz-transition-delay: 0s;
    transition-delay: 0s;
    opacity: 0;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    content: "";
    background: rgba(0, 0, 0, 0.3);
}
*, *::before, *::after {
    box-sizing: border-box;
}
.star-rating {
    display: block;
    cursor: pointer;
    float: none;
    position: relative;
    font-size: 11px;
    height: 1em;
    line-height: 1em;
    overflow: hidden;
    position: relative;
    width: 6em;
    letter-spacing: .1em;
    text-align: left;
    white-space: nowrap;
}
.rating-wrap{
margin: 0 0 0.625rem;
height: 1px;
position: relative;
display: table ;}
.cart-table-row-right {
            width: 33%;
            padding-top: 10px;
        }

        .cart-table-img {
            max-height: 75px;
        }

        .cart-table-actions {
            text-align: right;
            font-size: 14px;
        }
        .cart-buttons {
        display: flex;
        justify-content: space-between;
        margin-bottom: 40px;
    }
    .cart-options {
            color: $text-color;
            background: transparent;
            font-size: 14px;
            font-weight: 300;
            padding: 0;

            &:hover {
                color: lighten($text-color, 30%);
            }
        }
    }
    .checkout-form label{
        font-size: 12px;
        font-weight: 700;
    }
    .checkout-form input{
        font-size: 14px;
        padding: 5px;
        font-weight: 400;
    }

        </style>
</head>
<body>

    <div id="app">
        <button type="button" class="btn btn-outline-info btn-sm">
            <a href="/products/create">
            <i class="bi bi-star-fill" style="font-size: -2rem; color: cornflowerblue;"></i> Sell an Item
            </a>
            </button>

            <nav class="navbar navbar-expand-sm  navbar-light" style="background-color: #e3f2fd;">

            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/products') }}">
                    <i class="bi bi-unity" style="font-size: 2rem; color: cornflowerblue;"></i>
                    {{ config('app.name', 'Sales') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
<ul class="nav nav-pills justify-content-end">
    <li class="nav-item">
        <span class="clearfix">
            <i class="bi bi-cart4"></i>
            Cart
            <span class="basket-item-count">
                <span class="badge badge-pill red"> 0 </span>
            </span>
        </span>
    {{-- <a href="{{ route('cart.index') }}">
        <i class="bi bi-cart4"></i>
            CART
            <span class="badge rounded-pill bg-danger">
                {{ Cart::count() }}
                    </span>
    </a> --}}
    </li>
  <li class="nav-item">


      <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
    
  </li>
</ul>

                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
            <br>
            <footer>
                @include('layouts.footer')
                </footer>

        </main>
    </div>
{{-- custom js --}}
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
<script src="//code.tidio.co/23dzcsx6hghnpiql1f4fzbmhuirrdeug.js" async></script>
</body>
</html>
