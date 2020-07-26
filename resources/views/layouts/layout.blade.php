<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ $title ?? 'hotels' }}</title>
        <link rel="icon" type="image/x-icon" href="https://img.icons8.com/emoji/48/000000/palm-tree-emoji.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/styles.css" rel="stylesheet" />
        <style>
          div.alert-danger,
          div.alert-success{
            position: absolute;
            top: 90px;
            z-index: 100;
            width: 100%;
            border: none;
            display: none;
            background-color: rgba(255,150,150,0.7);
          }
          div.alert-success{
            background-color: rgba(150,255,150,0.7);
          }
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="/"><i class="fas fa-h-square"></i>otels</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger {{ (request()->is('/')) ? 'active' : '' }}" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger {{ (request()->is('hotels*')) ? 'active' : '' }}" href="/hotels">Hotels</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger {{ (request()->is('about')) ? 'active' : '' }}" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger {{ (request()->is('contact*')) ? 'active' : '' }}" href="/contact">Contact</a>
                        </li>
                        
                        <!-- optional menu items based on authentication -->
                        @guest
                          <li class="nav-item">
                              <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                          @endif
                        @else

                          @if(Auth::user()->is_admin)
                          <li class="nav-item">
                            <a href="/admin" class="nav-link">Admin</a>
                          </li>       
                          @endif

                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
        
                        @endguest
                        <!-- end of optional menu items -->

                    </ul>
                </div>
            </div>
        </nav>

        @include('partials/flash')

        <!-- page content goes here -->
        @yield('content')

        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © Alexandr Pasko 2020</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="/js/scripts.js"></script>

        <script>
          $(document).ready(function(){

          setTimeout(function(){
            $('.alert').fadeIn('slow');
          },1000);

          setTimeout(function(){
            $('.alert').fadeOut('slow');
          },4000);

          });
        </script>
    </body>
</html>
