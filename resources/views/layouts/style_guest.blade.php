<!doctype html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
<html x-data="{colorMode: localStorage.getItem('colorMode') || localStorage.setItem('colorMode', 'light')}" x-init="$watch('colorMode', val => localStorage.setItem('colorMode', val))" x-bind:class="{'dark': colorMode === 'dark' || (colorMode === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches)}" class="scroll-smooth h-full overflow-y-auto">

<head>
  <meta name="google-site-verification" content="SBZIyu69EGa0Q8SDYRZq68ccFH86rfE-PXHkZA2iUhY" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'SciAssetHub') }}</title>

  <!-- Scripts -->



  <!-- end -->

  <script src="{{ asset('js/nav_auth.js') }}" defer></script>

  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/auth.js') }}" defer></script>
  <script src="{{ asset('js/right_click_chemical.js') }}" defer></script>
  <script src="{{ asset('js/right_click_equipment.js') }}" defer></script>
  <script src="{{ asset('js/increase_decrease_quantity.js') }}" defer></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>


  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


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
  <link href="{{ asset('css/increase_decrease_quantity.css')}}" rel="stylesheet">
  <link href="{{ asset('css/table.css')}}" rel="stylesheet">
  <script src="{{ asset('js/add_asset_controller.js') }}" defer></script>
  <script src="{{ asset('js/submit_login_radio.js') }}" defer></script>
  <script src="{{ asset('js/dropdown.js') }}" defer></script>
  <script src="{{ asset('js/img_controller.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script> -->

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

    <div class="container">

      <nav class="navbar navbar-expand-lg navbar-light shadow-sm py-2 bg-light fixed-top">



        @guest
        <div class="container pb-1"> <a class="navbar-brand d-flex align-items-center" href="/">

            <img img src="{{asset('Sciassethub_logo.png')}}" alt="Logo" width="140" class="d-inline-block align-text-top">
          </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse pt-4 mt-3" id="navbar4">
            <ul class="navbar-nav mr-auto -lg-4">
              <li class="nav-item px-lg-2 {{Request::is ('/') ? 'active' : ''}}">

                <a class="nav-link" href="/">

                  <span class="d-inline-block d-lg-none icon-width">
                    <i class="fas fa-home"></i>
                  </span>Home

                </a>

              </li>
            </ul>

            <ul class="navbar-nav ml-auto mr-3 mt-3 mt-lg-0">
              <li class="nav-item px-lg-2 pt-2 {{ URL::route('about') === URL::current() ? 'active' : '' }}"> <a class="nav-link" href="/about"><span class="d-inline-block d-lg-none icon-width"><i class="fa fa-user-lock"></i></span>About</a> </li>

              <li class="nav-item px-lg-2 pt-2 {{ URL::route('login') === URL::current() ? 'active' : '' }}"> <a class="nav-link" href="/login"><span class="d-inline-block d-lg-none icon-width"><i class="fa fa-user-lock"></i></span>Log In</a> </li>

              <li class="nav-item px-lg-2 pt-2 {{ URL::route('register') === URL::current() ? 'active' : '' }}"> <a class="nav-link product-link" href="/register"><span class="d-inline-block d-lg-none icon-width">
                    <!-- <i class="fas fa-user-plus"></i> -->

                  </span>Create account &#8211; <span>It's free</span></a>
              </li>

              <li class="nav-item px-lg-2 pt-2"> <a class="nav-link" href="/search"><span class=""></span><i class="fa fa-search"> </i></a> </li>



            </ul>



            <!-- <div class="pt-2">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="input-group">

                    <input type="text" class="form-control outline-0" placeholder="Type asset name">
                    <div class="input-group-append">
                      <button class="btn btn-secondary no-radius-2 text-white" type="button">
                        Search
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

          </div>
        </div>
        @endguest

        @auth


        <div class="container pb-1">



          <a class="navbar-brand d-flex align-items-center px-0 mx-0" href="/dashboard">
            <img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1682796412/Logo_Sci_Asset_Hub__hcynxi.png" alt="Logo" width="180" class="d-inline-block align-text-top">
          </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse px-0 mx-0" id="navbar4">

            <ul class="navbar-nav ml-auto mr-3 mt-0 mt-lg-0">
              <ul class="navbar-nav mr-auto">

                @if((Auth::user()->gender != '-'))


                @if(URL::route('my_student') === URL::current() || URL::route('dashboard') === URL::current() || URL::route('history') === URL::current() || URL::route('profile') === URL::current() || URL::route ('message') === URL::current() || URL::route ('search.index') === URL::current())

                <li class="nav-item px-lg-2 pt-3"> <a class="nav-link" href="/search"><span class=""></span><i class="fa fa-search"> <?php
                                                                                                                                      // Illuminate\Support\Facades\Cache::forget('asset_search');
                                                                                                                                      // Illuminate\Support\Facades\Cache::forget('input_inserted');
                                                                                                                                      ?></i></a> </li>

                <li class="nav-item pt-3 {{ URL::route('dashboard') === URL::current() ? 'active' : '' }}">
                  <a class="nav-link" href="/dashboard">
                    <span class="d-inline-block d-lg-none icon-width">
                      <i class="fa fa-window-maximize"></i></span>Dashboard</a>
                </li>

                @if(Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->position_id) != 5)
                <li class="nav-item pt-3 {{ URL::route('my_student') === URL::current() ? 'active' : '' }}">
                  <a class="nav-link" href="/my_student">
                    <span class="d-inline-block d-lg-none icon-width">
                      <i class="fas fa-envelope"></i></span>My student
                    <span class="badge badge-pill badge-danger">
                      <?php
                      // dd( ($asset_requested_display_to_supervisor));
                      ?>
                      {{ count($asset_requested_display_to_supervisor->where('is_request_approved', Illuminate\Support\Facades\Auth::user()->email)) }}
                    </span>
                    <span class="d-inline-block d-lg-none icon-width">
                  </a>
                </li>
                @endif


                <li class="nav-item pt-3 {{ URL::route('message') === URL::current() ? 'active' : '' }}">
                  <a class="nav-link" href="/message">
                    <span class="d-inline-block d-lg-none icon-width">
                      <i class="fas fa-envelope"></i></span>Message</a>
                </li>

                <li class="nav-item pt-3 {{ URL::route('history') === URL::current() ? 'active' : '' }}">
                  <a class="nav-link" href="/history">
                    <span class="d-inline-block d-lg-none icon-width">
                      <i class="fas fa-envelope"></i></span>History</a>
                </li>




                @elseif(URL::route ('add_request__list_asset') === URL::current() || URL::route ('view_space_requested.owner') === URL::current() || URL::route ('category') === URL::current() || URL::route ('form_add_equipment') === URL::current() || URL::route ('dashboard.asset_requested') === URL::current())

                <li class="nav-item pt-3 {{ URL::route('add_request__list_asset') === URL::current() ? 'active' : '' }} {{ URL::route('category') === URL::current() ? 'active' : '' }} {{ URL::route('form_add_equipment') === URL::current() ? 'active' : '' }}">
                  <a class="nav-link" href="/dashboard/my_asset">
                    <span class="d-inline-block d-lg-none icon-width">
                      <i class="fa fa-store"></i></span>My asset</a>
                </li>
                <li class="nav-item pt-3 {{ URL::route('dashboard') === URL::current() ? 'active' : '' }} {{ URL::route('dashboard.asset_requested') === URL::current() ? 'active' : '' }}">
                  <a class="nav-link" href="/dashboard/asset_requested">
                    <span class="d-inline-block d-lg-none icon-width">
                      <i class="fas fa-box-open"></i></span> Asset requested <span class="badge badge-pill badge-danger">
                      {{ count($asset_requested_display_to_owner->where('is_request_approved', '-')) }}
                    </span></a>
                </li>

                <li class="nav-item pt-3 {{ URL::route('view_space_requested.owner') === URL::current() ? 'active' : '' }}">
                  <a class="nav-link" href="/space_requested">
                    <span class="d-inline-block d-lg-none icon-width">
                      <i class="fas fa-box-open"></i></span>Space requested <span class="badge badge-pill badge-danger">
                      {{ count($all_space_requested_owner->where('is_request_approved', '-')) }}
                    </span></a>
                </li>


                @elseif(URL::route ('index.rent_space_available') === URL::current() || (Request::is('rent_space_available/preview_rent_space_available/*')) || URL::route ('view_space_requested') === URL::current() || URL::route ('history') === URL::current())

                <li class="nav-item pt-3 {{ Request::is('rent_space_available/preview_rent_space_available/*') ? 'active' : '' }} {{ URL::route('index.rent_space_available') === URL::current() ? 'active' : '' }}">
                  <a class="nav-link" href="/rent_space_available">
                    <span class="d-inline-block d-lg-none icon-width">
                      <i class="fa fa-store"></i></span>Space for rent</a>
                </li>

                <li class="nav-item pt-3 {{ URL::route('view_space_requested') === URL::current() ? 'active' : '' }}">
                  <a class="nav-link" href="/view_space_requested">
                    <span class="d-inline-block d-lg-none icon-width">
                      <i class="fa fa-store"></i></span>View space requested
                    <span class="badge badge-pill badge-danger">
                      {{ count($all_space_requested_->where('is_request_approved', '-')) }}
                    </span></a>
                </li>

                <!-- <li class="nav-item pt-3 {{ URL::route('history') === URL::current() ? 'active' : '' }}">
                  <a class="nav-link" href="/history">
                    <span class="d-inline-block d-lg-none icon-width">
                      <i class="fa fa-store"></i></span>History</a>
                </li> -->

                @else
                <li class="nav-item pt-3 {{ URL::route('index') === URL::current() ? 'active' : '' }} {{ (request()->is('all_asset_available/*')) ? 'active' : '' }}">
                  <a class="nav-link" href="/">
                    <span class="d-inline-block d-lg-none icon-width">
                      <i class="fa fa-store"></i></span>Asset</a>
                </li>
                <li class="nav-item px-lg-2 pt-2 dropdown d-menu {{Request::is ('/profile_student') ? 'active' : ''}}">

                <li class="nav-item pt-3 {{ URL::route('view_asset_requested') === URL::current() ? 'active' : '' }}">
                  <a class="nav-link" href="/view_asset_requested">
                    <span class="d-inline-block d-lg-none icon-width">
                      <i class="fas fa-box-open"></i></span>View asset requested <span class="badge badge-pill badge-danger">
                      <?php
                      $filter_asset_requested = $asset_requested_display->where('is_request_approved', '-');
                      $filter_asset_requested_count = $filter_asset_requested->where('asset_owner_ref', '!=', '-');
                      ?>
                      {{count($filter_asset_requested_count)}}
                    </span>
                  </a>
                </li>
                @endif
                @else
                <li class="nav-item pt-3 {{ URL::route('dashboard') === URL::current() ? 'active' : '' }}">
                  <a class="nav-link" href="/dashboard">
                    <span class="d-inline-block d-lg-none icon-width">
                      <i class="fa fa-window-maximize"></i></span>Dashboard</a>
                </li>

                @endif

                <li class="nav-item px-lg-2 pt-2 dropdown d-menu {{Request::is ('/profile_student') ? 'active' : ''}}">


                  <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(Auth::user()->firstname != "-")
                    <div class="user_profile_01">
                      <?php
                      $user_full_name = Illuminate\Support\Facades\Crypt::decrypt(Illuminate\Support\Facades\Auth::user()->firstname) . " " . Illuminate\Support\Facades\Crypt::decrypt(Illuminate\Support\Facades\Auth::user()->lastname);
                      ?>

                      <span class="text-white">{{App\Providers\AppServiceProvider::FirstLetter($user_full_name)}}</span>
                    </div>
                    @else
                    <span class="d-inline-block d-lg-none icon-width"><i class="far fa-caret-square-down"></i></span>
                    <i class="fa fa-user-circle" style="font-size:36px"></i>
                    @endif
                  </a>

                  <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="/profile">Profile</a>
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

        @endauth

      </nav>
    </div>
    <main class="py-5">
      @yield('content')
    </main>
  </div>

  <!--footer-->
  @guest
  <footer class="footer">
    <div class="container bottom_border">
      <div class="row">
        <div class=" col-lg-3 col-md-3 col-sm-6">
          <!-- <ul class="footer_ul_amrc">
            <li>
              <a href="/">Delete account</a>
            </li>
          </ul> -->
          <br />
          <br />
          <p class="text-purple">
            SciAssetHub is a user-centered web application system that aims to support your
            research by granting you access to university assets and space to rent, helping you
            find the resources you need.
          </p>
        </div>
        <div class=" col-lg-1 col-md-1 col-sm-6">
        </div>
        <div class=" col-lg-3 col-md-3 col-sm-6">
          <h5 class="footer_header"><b class="text-secondary">QUICK LINK</b></h5>
          <ul class="footer_ul_amrc">
            <li>
              <a href="/login">Log In</a>
            </li>
            <li>
              <a href="/register">Sign up</a>
            </li>
            <li>
              <a href="/about">About</a>
            </li>
            <li>
              <a href="/all_asset_available/Chemical">Chemical</a>
            </li>
            <li>
              <a href="/all_asset_available/Equipment">Equipment</a>
            </li>
            <li>
              <a href="/rent_space_available">Rent space</a>
            </li>
          </ul>
        </div>


        <div class=" col-lg-2 col-md-2 col-sm-6">
          <h5 class="footer_header"><b class="text-secondary">LEGAL</b></h5>
          <ul class="footer_ul_amrc">
            <li>
              <a href="/conditions_utilisation">Terms of Use</a>
            </li>
            <li>
              <a href="/politique_de_confidentialite">Privacy Policy</a>
            </li>
            <li>
              <a href="/politique_de_confidentialite">POPIA</a>
            </li>
          </ul>


        </div>

        <div class=" col-lg-3 col-md-3 col-sm-6 ">
          <div class="mb10 pt-0 text-white">
            <!-- <h1 style="font-size:x-large;color:#000"><b>SciAssetHub<span class="logoLetter"></span></b></h1>
          -->
            <center><img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1694266732/Sciassethub/img/UWC_logo_stacked-03_mnuhk7.svg" alt="Logo" width="150" class="d-inline-block align-text-top pb-3"></center>

            <br />
            <center>
              <p class="text-white">University of the Western Cape, Robert Sobukwe Road, Bellville, 7535 Republic of South Africa </p>
              <p class="text-white pt-1">info@uwc.ac.za | +27 21 959 2911</p>

            </center>
          </div>
        </div>

      </div>
    </div>
    <div class="container">
      <div class="p-3 float-right text-white" style="background-color: #1d2951;">
        © {{ now()->year }} Copyright <span class="ml-2 text-white">Powered by</span>
        <a href="https://www.uwc.ac.za/" style="color:#fff">Department of Computer Science</a>
      </div>
    </div>
  </footer>
  @else
  <div class="container">
    <div class="p-3 float-right">
      © {{ now()->year }} Copyright:
      <a href="/" style="color:#000">SciAssetHub</a>
    </div>
  </div>
  @endguest


</body>

</html>