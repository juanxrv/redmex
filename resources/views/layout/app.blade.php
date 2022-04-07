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
  @livewireStyles

  <title>Redmex - @yield('title')</title>
</head>

<body>
  <header id="masthead-pro" class="{{ auth()->check() ? 'sticky-header' : 'landing-page-header' }}">
    <!-- Remove sticky-header class to remove sticky header -->
    <div class="header-container">

      <a href="{{ route('landing') }}" id="logo" class="float-left mt-3 mx-3"><img
          src="{{ asset('images/chankro.png') }}" width="50" alt="Logo"></a>
      @if (auth()->check())
        <x-logged-navbar />
      @else
        <x-landing-navbar />
      @endif
  </header>

  @yield('content')

  <footer id="footer-pro">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="copyright-text-pro">Redmex &copy; Todos los derechos reservados.
            @auth
              <a href="{{ route('about') }}">¿Quiénes somos?</a>
            @endauth
          </div>
        </div><!-- close .col -->
        <div class="col-12 col-md-6">
          <div class="copyright-text-pro text-left text-md-right">Desarrollado por <a href="#delmango">Secta del Mango</a>.
          </div>
        </div>
      </div><!-- close .row -->
    </div><!-- close .container -->

    <div id="delmango" class="delmango">
      <div class="delmango-container">
        <img src="{{ asset('images/mango.png') }}" alt="Secta del mango">
        <h2>Colaboradores</h2>
        <ul>
          <li>Brandon Alexis Villalobos López</li>
          <li>Lidia Guadalupe Ramírez Soto</li>
          <li>Juan José Martínez López</li>
          <li>Juan José Rocio Villanueva</li>
        </ul>
        <a class="btn" href="#">Cerrar</a>
      </div>
    </div>

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
  @livewireScripts
</body>

</html>
