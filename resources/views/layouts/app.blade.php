<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/base.css') }}">
  </head>

  <body>
    <nav class="navbar navbar-expand-sm navbar-light">
      <div class="container">
        <a class="navbar-brand" href="{{ route('product.index') }}">{{ config('app.name', 'Laravel')}}</a>

        <ul class="navbar-nav ml-auto">
          @guest 
          <li class="nav-item">
            <a class="nav-link fas fa-user-plus fa-lg" href="{{ route('register') }}"></a> 
          </li>
          @endguest 
          
          @guest 
          <li class="nav-item">
            <a class="nav-link fas fa-sign-in-alt fa-lg" href="{{ route('login') }}"></a>
          </li>
          @endguest 
          
          
          @auth 
          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-circle fa-lg"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              @can('isAdmin')
              <button class="dropdown-item" type="button"
              onclick="location.href='{{ route('product.create') }}'">商品登録</button>
              @endcan

              {{-- <div class="dropdown-divider"></div> --}}
              <button form="logout-button" class="dropdown-item" type="submit">ログアウト</button>
            </div>
          </li>
          <form id="logout-button" method="POST" action="{{ route('logout') }}"> 
            @csrf 
          </form>
          <!-- Dropdown -->
          @endauth 

          @auth 
          
            <li class="nav-item cart-line">
              <a class="fas fa-shopping-cart" href="{{ route('cart.index') }}"></a>
            </li>
       
          @endauth 
        </ul>
      </div>
    </nav>
    @yield('content')

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
  </body>
</html>
