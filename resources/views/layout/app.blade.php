<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://cdn.plyr.io/3.6.12/plyr.css" />
  <link rel="stylesheet"
    href="//fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;500;700&family=Lato:wght@300;400;700&display=swap">

  <link rel="stylesheet" href="{{ asset('icons/fontawesome/css/all.min.css') }}"><!-- FontAwesome Icons -->
  <link rel="stylesheet" href="{{ asset('icons/dashicons/css/dashicons-min.css') }}">
  <!-- DashIcons For Star Ratings -->

  <title>Redmex - @yield('title')</title>
</head>

<body>
  <header id="masthead-pro" class="{{ auth()->check() ? 'sticky-header' : 'landing-page-header' }}">
    <!-- Remove sticky-header class to remove sticky header -->
    <div class="header-container">

      <a href="{{ route('landing') }}" id="logo" class="float-left mt-3 mx-3"><img
          src="{{ asset('images/chankro.png') }}" width="50" alt="Logo"></a>
      @if (auth()->check())
        <nav id="site-navigation-pro">
          <ul class="sf-menu">
            <li class="normal-item-pro {{ request()->is('home') ? 'current-menu-item' : '' }}">
              <a href="{{ route('home') }}"><i class="fas fa-home"></i>Inicio</a>
            </li>
            <li class="normal-item-pro {{ request()->is('series') ? 'current-menu-item' : '' }}">
              <a href="{{ route('series') }}"><i class="fas fa-tv"></i>Series</a>
            </li>
            <li class="normal-item-pro {{ request()->is('movies') ? 'current-menu-item' : '' }}">
              <a href="{{ route('movies') }}"><i class="fas fa-film"></i>Películas</a>
            </li>
          </ul>
        </nav>
        <!--div id="header-btn-right">
     <button class="btn btn-header-pro noselect" data-toggle="modal" data-target="#LoginModal" >Login</button>
    </div-->

        <div id="mobile-bars-icon-pro" class="noselect"><i class="fas fa-bars"></i></div>


        <div id="header-user-profile">
          <div id="header-user-profile-click" class="noselect">
            <img src="http://via.placeholder.com/80x80" alt="{{ auth()->user()->name }}">
            <div id="header-username">{{ auth()->user()->name }}</div><i class="fas fa-angle-down"></i>
          </div><!-- close #header-user-profile-click -->
          <div id="header-user-profile-menu">
            <ul>
              <li><a href="profile.html"><i class="fa fa-user-circle"></i>Perfil</a></li>
              <li><a href="#!"><i class="fa fa-cogs"></i>Editar perfil</a></li>
              <li><a href="profile.html"><i class="fa fa-list-ul"></i>Favoritos</a></li>
              <li><a href="membership-plan.html"><i class="fa fa-credit-card"></i>Suscripción</a></li>
              <li><a id="logout" href="#"><i class="fa fa-power-off"></i>Salir</a></li>
            </ul>
          </div><!-- close #header-user-profile-menu -->
        </div><!-- close #header-user-profile -->

        <div id="progression-studios-header-search-icon" class="noselect">
          <div class="progression-icon-search"></div>
        </div>


        <div id="video-search-header">
          <div class="container">


            <div id="video-search-header-filtering">
              <form method="GET" action="{{ route('search') }}" id="video-search-header-filtering-padding">
                <input type="text" placeholder="Búscar películas o series" name="query" aria-label="Search"
                  id="main-text-field">
                <div id="video-search-header-buttons">
                  <button type="submit" class="btn">Búscar</button>
                  <a href="#!" class="btn reset-btn">Restablecer</a>
                </div><!-- close #video-search-header-buttons -->
              </form><!-- #video-search-header-filtering-padding -->
            </div><!-- close #video-search-header-filtering -->

          </div><!-- close .container -->
        </div><!-- close .video-search-header -->



        <div class="clearfix"></div>
    </div><!-- close .header-container -->

    <nav id="mobile-navigation-pro">

      <ul id="mobile-menu-pro">
        <li>
          <a href="{{ route('home') }}"><i class="fas fa-home"></i>Inicio</a>
        </li>
        <li>
          <a href="{{ route('series') }}"><i class="fas fa-tv"></i>Series</a>
        </li>
        <li>
          <a href="{{ route('movies') }}"><i class="fas fa-film"></i>Películas</a>
        </li>

      </ul>

      <div id="search-mobile-nav-pro">
        <input type="text" placeholder="Búscar películas o series" aria-label="Search">
      </div>

      <div class="clearfix"></div>


    </nav>
    <div id="progression-studios-header-shadow"></div>
  @else
    <div id="mobile-bars-icon-pro" class="noselect"><i class="fas fa-bars"></i></div>
    <div id="header-btn-right">
      <button class="btn btn-header-pro noselect" data-toggle="modal" data-target="#LoginModal">Inicia sesión</button>
      <button class="btn btn-header-pro ml-2 noselect" data-toggle="modal"
        data-target="#SignoutModal">Regístrate</button>
    </div>
    {{-- <div id="mobile-bars-icon-pro" class="noselect"><i class="fas fa-bars"></i></div> --}}
    <div class="clearfix"></div>
    <nav id="mobile-navigation-pro">
      <button class="btn btn-mobile-pro btn-header-pro noselect" data-toggle="modal" data-target="#LoginModal">Inicia
        sesión</button>
      <button class="btn btn-mobile-pro btn-header-pro noselect" data-toggle="modal"
        data-target="#SignoutModal">Regístrate</button>
    </nav>
    @endif
  </header>

  @yield('content')

  <footer id="footer-pro">
    <div class="container">
      <div class="row">
        <div class="col-md">
          <div class="copyright-text-pro">Redmex &copy; Todos los derechos reservados. Desarrollado por <a
              href="#!">Secta del Mango</a>.
          </div>
        </div><!-- close .col -->
        <div class="col-md">
          <div class="copyright-text-pro text-right"><a href="{{ route('about') }}">¿Quiénes somos?</a></div>
        </div><!-- close .col -->
      </div><!-- close .row -->
    </div><!-- close .container -->

  </footer>
  <!-- Required Framework JavaScript -->
  <script src="{{ asset('js/libs/jquery-3.5.1.min.js') }}"></script><!-- jQuery -->
  <script src="{{ asset('js/libs/popper.min.js') }}" defer></script><!-- Bootstrap Popper/Extras JS -->
  <script src="{{ asset('js/libs/bootstrap.min.js') }}" defer></script><!-- Bootstrap Main JS -->
  <!-- All JavaScript in Footer -->

  <!-- Additional Plugins and JavaScript -->
  <script src="{{ asset('js/navigation.js') }}" defer></script><!-- Header Navigation JS Plugin -->
  <script src="{{ asset('js/jquery.flexslider-min.js') }}" defer></script><!-- FlexSlider JS Plugin -->
  <script src="{{ asset('js/jquery-asRange.min.js') }}" defer></script><!-- Range Slider JS Plugin -->
  <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script><!-- Carousel JS Plugin -->
  <script src="{{ asset('js/scripts.js') }}" defer></script><!-- Custom Document Ready JS -->
  <script src="{{ asset('js/app.js') }}" defer></script><!-- Juan -->


  <script>
    const tk = `{{ session('token') }}`;
    const logout = document.querySelector('#logout');
    if (logout) {
      logout.addEventListener('click', () => {
        fetch('/api/logout', {
          headers: {
            'Accept': 'application/json',
            'Authorization': `Bearer ${tk}`
          }
        }).then(() => fetch('/logout').then(() => window.location.href = '/'));
      });
    }
  </script>
</body>

</html>
