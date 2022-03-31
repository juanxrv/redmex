@extends('layout.app')
@section('title', 'Inicio')

@section('content')
  <div class="flexslider progression-studios-slider">
    <ul class="slides">
      {{-- {{ dd($dataTrendingWeek) }} --}}
      @foreach ($dataTrendingWeek as $week)
        <li class="progression_studios_animate_left">
          <div class="progression-studios-slider-image-background"
            style="background-image:url({{ $apibase }}/original/{{ $week['backdrop_path'] }});">
            <div class="progression-studios-slider-display-table">
              <div class="progression-studios-slider-vertical-align">

                <div class="container">

                  <div class="progression-studios-slider-caption-width">
                    <div class="progression-studios-slider-caption-align">
                      <h2>
                        <a href="{{ route('watch', ['id' => $week['id'], 'media_type' => $week['media_type']]) }}">
                          {{ $week['title'] ?? $week['name'] }}
                        </a>
                      </h2>
                      <ul class="slider-video-post-meta-list">
                        <li class="slider-video-post-meta-cat">
                          <ul>
                            {{-- $week['genre_ids'] --}}
                            @foreach ($genres as $genre)
                              @foreach (array_slice($week['genre_ids'], 0, 2) as $ids)
                                @if ($genre['id'] == $ids)
                                  <li>{{ $genre['name'] }}</li>
                                @endif
                              @endforeach
                            @endforeach
                          </ul>
                        </li>
                        <li class="slider-video-post-meta-reviews">
                          <div class="average-rating-video-post">
                            <div class="average-rating-video-empty">
                              <span class="dashicons dashicons-star-empty"></span><span
                                class="dashicons dashicons-star-empty"></span><span
                                class="dashicons dashicons-star-empty"></span><span
                                class="dashicons dashicons-star-empty"></span><span
                                class="dashicons dashicons-star-empty"></span>
                            </div>
                            <div class="average-rating-overflow-width" style="width:{{ $week['vote_average'] * 10 }}%;">
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
                        </li>
                        <li class="slider-video-post-meta-year">
                          {{ $week['release_date'] ?? $week['first_air_date'] }}</li>
                          @isset($week['adult'])
                            <li class="slider-video-post-meta-rating"><span>{{ $week['adult'] ? 'C' : 'AA' }}</span></li>
                          @endisset
                      </ul>
                      <div class="clearfix"></div>
                      <div class="progression-studios-slider-excerpt">{{ $week['overview'] }}</div>
                      <a class="btn btn-slider-pro afterglow"
                        href="{{ route('watch', ['id' => $week['id'], 'media_type' => $week['media_type']]) }}"><i
                          class="fas fa-play-circle"></i>Ver</a>

                    </div><!-- close .progression-studios-slider-caption-align -->
                  </div><!-- close .progression-studios-slider-caption-width -->

                </div><!-- close .container -->

              </div><!-- close .progression-studios-slider-vertical-align -->
            </div><!-- close .progression-studios-slider-display-table -->

            <div class="progression-studios-slider-overlay-gradient"></div>

            <div class="progression-studios-skrn-slider-upside-down"
              style="background-image:url({{ $apibase }}/original/{{ $week['backdrop_path'] }});"></div>

          </div><!-- close .progression-studios-slider-image-background -->
        </li>
      @endforeach
    </ul>
  </div><!-- close .progression-studios-slider - See /js/script.js file for options -->

  <div id="content-pro">

    <div class="container custom-gutters-pro">

      <div style="height:15px;"></div>

      <h2 class="post-list-heading">Destacado<span>Esta lista no te decepcionará</span></h2>


      <div class="progression-studios-elementor-carousel-container progression-studios-always-arrows-on">
        <div id="progression-video-carousel" class="owl-carousel progression-carousel-theme">
          {{-- {{dd($dataTrendingDay)}} --}}
          @foreach ($dataTrendingDay as $day)
            <div class="item">
              <div class="progression-studios-video-index-container">
                <a href="{{ route('watch', ['id' => $day['id'], 'media_type' => $day['media_type']]) }}">
                  <div class="progression-studios-video-feaured-image"><img
                      @if ($day['backdrop_path']) src="{{ $apibase }}/w780/{{ $day['backdrop_path'] }}" alt="Featured Image"></div>
                    @else
                      src="{{ asset('images/not_found.svg') }}" style="max-height: 330px" alt="Imagen no encontrada"></div> @endif
                      <div class="progression-video-index-content">
                    <div class="progression-video-index-table">
                      <div class="progression-video-index-vertical-align">

                        <h2 class="progression-video-title">{{ $day['title'] ?? $day['name'] }}</h2>

                        <div class="average-rating-video-post">
                          <div class="average-rating-video-empty">
                            <span class="dashicons dashicons-star-empty"></span><span
                              class="dashicons dashicons-star-empty"></span><span
                              class="dashicons dashicons-star-empty"></span><span
                              class="dashicons dashicons-star-empty"></span><span
                              class="dashicons dashicons-star-empty"></span>
                          </div>
                          <div class="average-rating-overflow-width" style="width:{{ $day['vote_average'] * 10 }}%;">
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

                        <ul class="video-index-meta-taxonomy">
                          @foreach ($genres as $genre)
                            @foreach (array_slice($day['genre_ids'], 0, 1) as $ids)
                              @if ($genre['id'] == $ids)
                                <li>{{ $genre['name'] }}</li>
                              @endif
                            @endforeach
                          @endforeach
                        </ul>
                        <div class="clearfix"></div>

                      </div><!-- close .progression-video-index-vertical-align -->
                    </div><!-- close .progression-video-index-table -->
                  </div><!-- close .progression-video-index-content -->
                  <div class="video-index-border-hover"></div>

                </a>
              </div><!-- close .progression-studios-video-index-container  -->
            </div><!-- close .item -->
          @endforeach

          {{-- aki iban los item vea @ juan --}}

        </div><!-- close #progression-video-carousel - See /js/script.js file for options -->
      </div><!-- close .progression-studios-elementor-carousel-container  -->

      <div class="clearfix"></div>

      <div style="height:85px;"></div>

      <h2 class="post-list-heading">Popular<span>Encuentra algo nuevo para ver</span></h2>

      <div class="row">

        <x-popular :data="['dataPopular' => $dataPopular, 'apibase' => $apibase, 'genres' => $genres, 'page' => $page]" />
        <div id="popular"></div>

        <div class="clearfix"></div>
      </div><!-- close .container -->

    </div><!-- close #content-pro -->
    <a href="#0" id="pro-scroll-top"><i class="fas fa-chevron-up"></i></a>

  @endsection
