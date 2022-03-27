@extends('layout.app')
@section('title', $data['title'] ?? $data['name'])

@section('content')
  {{-- {{dd($data)}} --}}
  <div id="video-page-title-pro"
    @if ($data['backdrop_path'])
      style="background-image:url('{{ $apibase }}/original/{{ $data['backdrop_path'] }}');">
    @else
      style="background-image:url('{{ asset('images/not_found.svg') }}');">
    @endif
    @if ($data['videos']['results'])
      <a class="video-page-title-play-button" id="justplay" href="#play"><i class="fas fa-play"></i></a>
    @endif

    <div class="videoplayer-juan" id="play">
      <a href="#" id="close">X</a>
      <div class="player-container">
        @foreach ($data['videos']['results'] as $video)
          @if ($video['type'] == 'Trailer' || $video['type'] == 'Teaser')
            <div id="playerplay" data-plyr-provider="youtube" data-plyr-embed-id="{{ $video['key'] }}"></div>
          @endif
        @endforeach
      </div>
    </div>

    <div id="video-page-title-gradient-base"></div>
  </div><!-- close #video-page-title-pro -->



  <div id="content-pro">

    <div class="container custom-gutters-pro">


      <div id="video-post-container">
        <h1 class="video-post-heading-title">{{ $data['title'] ?? $data['name'] }}</h1>
        <div class="clearfix"></div>

        <ul id="video-post-meta-list">
          @foreach ($data['genres'] as $genre)
            <li>{{ $genre['name'] }}</li>
          @endforeach
          <li id="video-post-meta-reviews">
            <div class="average-rating-video-post">
              <div class="average-rating-video-empty">
                <span class="dashicons dashicons-star-empty"></span><span
                  class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span
                  class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span>
              </div>
              <div class="average-rating-overflow-width" style="width:{{ $data['vote_average'] * 10 }}%;">
                <div class="average-rating-video-filled">
                  <span class="dashicons dashicons-star-filled"></span><span
                    class="dashicons dashicons-star-filled"></span><span
                    class="dashicons dashicons-star-filled"></span><span
                    class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span>
                  <div class="clearfix"></div>
                </div><!-- close .average-rating-video-filled -->
              </div><!-- close .average-rating-overflow-width -->
            </div>
            <div class="clearfix"></div>
          </li>
          <li id="video-post-meta-year">{{ date('Y', strtotime($data['release_date'] ?? $data['first_air_date'])) }}
          </li>
          {{-- Carbon\Carbon::parse($data['first_air_date'])->diffForHumans(); --}}
          <li id="video-post-meta-rating"><span>{{ $data['adult'] ? 'C' : 'AA' }}</span></li>
        </ul>
        <div class="clearfix"></div>

        <div id="video-post-buttons-container">
          {{-- <a href="#play" class="afterglow" id="video-post-play-text-btn"><i
              class="fas fa-play"></i>Reproducir</a> --}}

          <a href="#!" class="wishlist-button-pro"><i id="favorito" class="fas fa-plus-circle"></i>Favorito</a>
          {{-- <div id="video-social-sharing-button" class="btn"><i class="fas fa-share"></i>Compartir</div> --}}
          <div class="clearfix"></div>
        </div><!-- close #video-post-buttons-container -->

        <div id="vayvo-video-post-content">
          <p>{{ $data['overview'] }}</p>
        </div><!-- #vayvo-video-post-content -->


        @if ($media_type == 'tv')
          <x-seasons :data="$data" />
        @else
          <x-related :similar="$data['similar']" :apibase="$apibase" />
        @endif

      </div><!-- close #video-post-container -->



      <div id="video-post-sidebar">
        <div class="content-sidebar-section video-sidebar-section-release-date">
          <h4 class="content-sidebar-sub-header">
            {{ $media_type == 'tv' ? 'Último episodio' : 'Fecha de lanzamiento' }}
          </h4>
          <div class="content-sidebar-short-description">
            {{ $media_type == 'tv'? Carbon\Carbon::parse($data['last_air_date'])->diffForHumans(): Carbon\Carbon::parse($data['release_date'])->diffForHumans() }}
          </div>
        </div><!-- close .content-sidebar-section -->

        <div class="content-sidebar-section video-sidebar-section-length">
          <h4 class="content-sidebar-sub-header">
            {{ $media_type == 'tv' ? 'Primer episodio' : 'Duración' }}
          </h4>
          <div class="content-sidebar-short-description">
            {{ $media_type == 'tv'? Carbon\Carbon::parse($data['first_air_date'])->diffForHumans(): $data['runtime'] . ' mins.' }}
          </div>
        </div><!-- close .content-sidebar-section -->



        <div class="clearfix"></div>
      </div>
      <!-- close #video-post-sidebar -->


      <div class="clearfix"></div>
    </div><!-- close .container -->



  </div><!-- close #content-pro -->
  <script>
    const params = window.location.pathname.split('/');
    const key = 'e09edc4f5402b9fa7f4a5a76a7edf348';
    const container = document.querySelector('.progression-studios-episode-list-main');
    const template = document.querySelector('#episodio').content;
    
    function getDataFromApi(selected) {
      fetch('https://api.themoviedb.org/3/tv/' +
          params[3] +
          '/season/' +
          selected +
          '?api_key=' + key +
          '&language=es'
          )
        .then(res => res.json())
        .then(data => {
          const fragment = document.createDocumentFragment();
          data.episodes.forEach((e) => {
            template.querySelector('#episodio-img').src = 'https://image.tmdb.org/t/p/w500' + e.still_path;
            template.querySelector('.progression-episode-list-title').textContent = e.name;
            template.querySelector('.progression-episode-season-meta-title').textContent = e.season_number;
            template.querySelector('.progression-episode-list-meta-release-date').textContent = e.air_date;
            template.querySelector('.progression-episode-list-short-description').textContent = e.overview;
            const clone = document.importNode(template, true);
            fragment.appendChild(clone);
          });
          container.appendChild(fragment);
        });
    }
    getDataFromApi(1);

    document.querySelector('.vayvo-progression-video-season-navigation').addEventListener('click', (e) => {
      if (e.target.dataset.seasonId) {
        document.querySelectorAll('.progression-video-season-title').forEach(e => e.classList.remove('current'));
        e.target.parentElement.classList.add('current');
        selected = e.target.dataset.seasonId;
        container.innerHTML = '';
        getDataFromApi(selected);
      }
    });

    document.querySelector('.wishlist-button-pro').addEventListener('click', () => {
      const fav = document.querySelector('#favorito');
      if (fav.classList.contains('fa-plus-circle')) {
        fav.classList.replace('fa-plus-circle', 'fa-bookmark')
      } else {
        fav.classList.replace('fa-bookmark', 'fa-plus-circle')
      }
    });
  </script>
@endsection
