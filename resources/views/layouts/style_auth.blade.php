<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta name="google-site-verification" content="SBZIyu69EGa0Q8SDYRZq68ccFH86rfE-PXHkZA2iUhY" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/nav_auth.js') }}" defer></script>

  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/auth.js') }}" defer></script>
  <script src="{{ asset('js/img_controller.js') }}" defer></script>




  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->



  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> -->

  <!-- <script src="https://cdn.tailwindcss.com"></script> -->

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
  <link href="{{ asset('css/img.css') }}" rel="stylesheet">
  <link href="{{ asset('css/btn.css') }}" rel="stylesheet">
  <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
  <link href="{{ asset('css/card.css') }}" rel="stylesheet">
  <link href="{{ asset('css/h_format.css') }}" rel="stylesheet">
  <link href="{{ asset('css/extra.css') }}" rel="stylesheet">
  <link href="{{ asset('css/form.css') }}" rel="stylesheet">
  <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
  <link href="{{ asset('css/profile_img.css')}}" rel="stylesheet">



  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script> -->

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body>
  <div id="app">

    <div class="container px-0 mx-0">
      <nav class="navbar navbar-expand-lg navbar-light shadow-sm py-2 pr-0 mr-0 bg-light fixed-top">

        <div class="container pb-1"> <a class="navbar-brand d-flex align-items-center px-0 mx-0" href="/dashboard">

            <img img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1694266732/Sciassethub/img/UWC_logo_stacked-03_mnuhk7.svg" alt="Logo" width="140" class="d-inline-block align-text-top">

            <!-- <img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1682796412/Logo_Sci_Asset_Hub__hcynxi.png" alt="Logo" width="180" class="d-inline-block align-text-top"> -->
          </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse px-0 mx-0" id="navbar4">

            <ul class="navbar-nav ml-auto mr-3 mt-0 mt-lg-0">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item pt-3">
                  <a class="nav-link" href="/">
                    <span class="d-inline-block d-lg-none icon-width">
                      <i class="fas fa-home"></i></span>Home</a>
                </li>

                <li class="nav-item px-lg-2 pt-2 dropdown d-menu">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-caret-square-down"></i></span>
                    <i class="fa fa-user-circle" style="font-size:36px"></i>
                  </a>
                  <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>

                  </div>
                </li>
              </ul>
            </ul>
          </div>
        </div>

      </nav>
    </div>
    <main class="py-5">
      <div class="container py-3">
        @yield('content')
      </div>
    </main>
  </div>

  <!--footer-->
  <div class="container">
    <div class="p-3 float-right text-white" style="background-color: #1d2951;">
      © {{ now()->year }} Copyright:
      <a href="/" style="color:#fff">SciAssetHub</a>
    </div>
  </div>
  <!--footer-->

</body>

</html>