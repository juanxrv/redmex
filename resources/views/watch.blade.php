@extends('layout.app')
@section('title', $data['title'] ?? $data['name'])

@section('content')
  {{-- {{ dd($data) }} --}}
  <div id="video-page-title-pro"
    style="background-image:url('{{ $data['backdrop_path'] ? mediaImg('original', $data['backdrop_path']) : asset('images/not_found.svg') }}');">
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

          <a href="#!" class="wishlist-button-pro btn"><i id="favorito" class="fas fa-plus-circle"></i>Favorito</a>
          {{-- <div id="video-social-sharing-button" class="btn"><i class="fas fa-share"></i>Compartir</div> --}}
          <div class="clearfix"></div>
        </div><!-- close #video-post-buttons-container -->

        <div id="vayvo-video-post-content">
          <p>{{ $data['overview'] }}</p>
        </div><!-- #vayvo-video-post-content -->


        @if ($media_type == 'tv')
          <x-seasons :data="$data" />
        @else
          <x-related :similar="$data['similar']" />
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
    const fav = document.querySelector('#favorito');
    const tkn = `{{ session('token') }}`;
    const headers = {
      'Accept': 'application/json',
      'Content-Type': 'application/json',
      'Authorization': `Bearer ${tkn}`
    };
    const data = {
      media_id: {{ $data['id'] }},
      media_type: `{{ $media_type }}`,
      media_name: `{{ $data['title'] ?? $data['name'] }}`,
      media_overview: `{{ $data['overview'] }}`,
      media_genre: `{{ $data['genres'][0]['name'] }}`,
      media_vote: {{ $data['vote_average'] }},
      media_img: `{{ mediaImg('original', $data['backdrop_path']) }}`
    };
    document.querySelector('.wishlist-button-pro').addEventListener('click', () => {
      if (fav.classList.contains('fa-plus-circle')) {
        fav.classList.replace('fa-plus-circle', 'fa-bookmark');
        fetch('/api/favs', {
            method: 'POST',
            headers,
            body: JSON.stringify(data)
          })
          .then(res => res.json())
          .then(data => console.log(data));
      } else {
        fav.classList.replace('fa-bookmark', 'fa-plus-circle');
        fetch("/api/favs?media_id={{ $data['id'] }}", {
          method: 'DELETE',
          headers
        });
      }
      fav.parentElement.classList.add('disabled');
      setTimeout(() => {
        fav.parentElement.classList.remove('disabled');
      }, 1000);
    });

    fetch('/api/favs', {
        headers
      })
      .then(res => res.json())
      .then((favs) => {
        if (typeof favs.data !== 'undefined') {
          favs.data.forEach(e => {
            if (e.media_id == {{ $data['id'] }}) {
              fav.classList.replace('fa-plus-circle', 'fa-bookmark');
            }
          });
        }
      });
  </script>
@endsection
