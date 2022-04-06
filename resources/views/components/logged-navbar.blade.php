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

<div id="mobile-bars-icon-pro" class="noselect"><i class="fas fa-bars"></i></div>


<div id="header-user-profile">
  <div id="header-user-profile-click" class="noselect">
    {{-- <img src="http://via.placeholder.com/80x80" alt="{{ auth()->user()->name }}"> --}}
    <div class="avatar {{auth()->user()->avatar == 'M' ? 'hombre' : 'mujer'}}">
      @if(auth()->user()->avatar != '')
        <i class="fas fa-user ml-0"></i>
      @else
        {{ Str::upper(substr(auth()->user()->name, 0, 1)) }}
      @endif
    </div>
    <div id="header-username">{{ auth()->user()->name }}</div><i class="fas fa-angle-down"></i>
  </div><!-- close #header-user-profile-click -->
  <div id="header-user-profile-menu">
    <ul>
      <li><a href="{{ route('profile') }}"><i class="fa fa-user-circle"></i>Perfil</a></li>
      {{-- <li><a href="#!"><i class="fa fa-cogs"></i>Editar perfil</a></li> --}}
      <li><a href="{{ route('profile') }}"><i class="fa fa-list-ul"></i>Favoritos</a></li>
      {{-- <li><a href="membership-plan.html"><i class="fa fa-credit-card"></i>Suscripción</a></li> --}}
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
    <form action="{{ route('search') }}" method="get">
      <input class="text-white" type="text" placeholder="Búscar películas o series" name="query"
        aria-label="Search">
    </form>
  </div>

  <div class="clearfix"></div>


</nav>
<div id="progression-studios-header-shadow"></div>

<script>
  document.querySelector('.reset-btn').addEventListener('click', () => {
    document.querySelector('#video-search-header-filtering-padding').reset();
  });
</script>