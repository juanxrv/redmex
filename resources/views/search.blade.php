@extends('layout.app')
@section('title', 'Buscar')

@section('content')
  <div id="content-pro">

    <div class="container custom-gutters-pro">
      {{-- {{dd($data)}} --}}
      <div style="height: 20px;"></div>

      <ul class="progression-filter-button-group">
        <li class="pro-selected">Todo</li>
        <li>Películas</li>
        <li>Series</li>
      </ul>

      <div class="row">

        @foreach ($data as $result)
          @if ($result['media_type'] != 'person')
            <div class="col col-12 col-md-6 col-lg-6">
              <div class="progression-studios-video-index-container">
                <a href="{{ route('watch', [$result['media_type'], $result['id']]) }}">
                  <div class="progression-studios-video-feaured-image"><img
                      @if ($result['backdrop_path'])
                        src="{{ $apibase }}/w780/{{ $result['backdrop_path'] }}" alt="Featured Image"></div>
                      @else
                        src="{{ asset('images/not_found.svg') }}" style="max-height: 330px" alt="Imagen no encontrada"></div>
                      @endif

                  <div class="progression-video-index-content">
                    <div class="progression-video-index-table">
                      <div class="progression-video-index-vertical-align">

                        <h2 class="progression-video-title">{{ $result['title'] ?? $result['name'] }}</h2>

                        <ul class="video-index-meta-taxonomy">
                          <li>{{ $result['release_date'] ?? $result['first_air_date'] }}</li>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="average-rating-video-post">
                          <div class="average-rating-video-empty">
                            <span class="dashicons dashicons-star-empty"></span><span
                              class="dashicons dashicons-star-empty"></span><span
                              class="dashicons dashicons-star-empty"></span><span
                              class="dashicons dashicons-star-empty"></span><span
                              class="dashicons dashicons-star-empty"></span>
                          </div>
                          <div class="average-rating-overflow-width" style="width:{{ $result['vote_average'] * 10 }}%;">
                            <div class="average-rating-video-filled">
                              <span class="dashicons dashicons-star-filled"></span><span
                                class="dashicons dashicons-star-filled"></span><span
                                class="dashicons dashicons-star-filled"></span><span
                                class="dashicons dashicons-star-filled"></span><span
                                class="dashicons dashicons-star-filled"></span>
                              <div class="clearfix"></div>
                            </div><!-- close .average-rating-video-filled -->
                          </div><!-- close .average-rating-overflow-width -->
                        </div><!-- close .average-rating-video-post -->
                        <div class="clearfix"></div>

                      </div><!-- close .progression-video-index-vertical-align -->
                    </div><!-- close .progression-video-index-table -->
                  </div><!-- close .progression-video-index-content -->
                  <div class="video-index-border-hover"></div>

                </a>
              </div><!-- close .progression-studios-video-index-container -->
            </div><!-- close .col -->
          @endif
        @endforeach

      </div><!-- close .row -->


      <div style="height:30px;"></div>



      <div class="clearfix"></div>
    </div><!-- close .container -->



  </div><!-- close #content-pro -->

@endsection
