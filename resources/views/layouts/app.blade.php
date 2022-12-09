<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sales') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cart.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


    <style>
        body{
        background-color: #f5eaea
        }
        .carousel slide{
            margin-left: 110px;
            padding: 0px 10px;
        }
        .li{
            list-style: none;
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
        .overlay {
  height: 100%;
  width: 100%;
  display: none;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
}
</style>
</head>
<body>
    <div id="app">

            <a href="/products/create">
            <i class="bi bi-star-fill" style="font-size: -5rem; color: cornflowerblue;"></i> Sell an Item
            </a>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
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
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            {{-- @php
                            $user = auth()->user();
                            $count = DB::select('select * from carts where userId = :userId', [$user->userId])
                            @endphp --}}
                            <a href="{{ route('showcart') }}" class="nav-link"><i class="bi bi-cart4" style="color: cornflowerblue;"></i>Cart[{{ 0 }}]</a>
                        </li>
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
                                <div class="dropdown show">
                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </a>



                                </div>
                            </li>
     <li>
     <a target="_blank" rel="noopener" href="https://webchat.botframework.com/embed/VeerBot?s=wBMXQ2fCelU.BHu0w8r5mGhRooQDrXuIRy-2V0_Of4VjAjX2gx0bARI" class="btn btn-outline-success"><i class="bi bi-chat-left-dots-fill"></i> Chat with Esales</a>

                            </li>
                        @endguest

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">

                @yield('content')

<hr>

<br>
            @include('layouts.footer')
        </main>
      
    </div>
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
    $('#button').click(function(){ 
        if(!$('#iframe').length) {
                $('#iframeHolder').html('<iframe id="iframe" src="https://webchat.botframework.com/embed/VeerBot?s=wBMXQ2fCelU.BHu0w8r5mGhRooQDrXuIRy-2V0_Of4VjAjX2gx0bARI"></iframe>');
        }
    });   
});
</script>
 

</script>
</html>
