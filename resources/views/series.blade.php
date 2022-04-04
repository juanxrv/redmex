@extends('layout.app')
@section('title', 'Series')

@section('content')
  {{-- {{ dd($data) }} --}}
  <div class="flexslider progression-studios-slider">
    <ul class="slides">
      <li class="progression_studios_animate_left">
        <div class="progression-studios-slider-image-background"
          style="background-image:url({{ mediaImg('original', $data['results'][0]['backdrop_path']) }});">
          <div class="progression-studios-slider-display-table">
            <div class="progression-studios-slider-vertical-align">

              <div class="container">

                <div class="progression-studios-slider-caption-width">
                  <div class="progression-studios-slider-caption-align">
                    <h2>
                      <a href="{{ route('watch', ['id' => $data['results'][0]['id'], 'media_type' => 'tv']) }}">
                        {{ $data['results'][0]['name'] }}
                      </a>
                    </h2>
                    <ul class="slider-video-post-meta-list">
                      <li class="slider-video-post-meta-cat">
                        <ul>
                          @foreach ($genres as $genre)
                            @foreach (array_slice($data['results'][0]['genre_ids'], 0, 2) as $id)
                              @if ($genre['id'] == $id)
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
                          <div class="average-rating-overflow-width"
                            style="width:{{ $data['results'][0]['vote_average'] * 10 }}%;">
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
                      <li class="slider-video-post-meta-year">{{ $data['results'][0]['first_air_date'] }}</li>
                      <li class="slider-video-post-meta-rating"><span>PG-13</span></li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="progression-studios-slider-excerpt">{{ $data['results'][0]['overview'] }}</div>
                    <a class="btn btn-slider-pro afterglow"
                      href="{{ route('watch', ['id' => $data['results'][0]['id'], 'media_type' => 'tv']) }}"><i
                        class="fas fa-play-circle"></i>Ver</a>

                  </div><!-- close .progression-studios-slider-caption-align -->
                </div><!-- close .progression-studios-slider-caption-width -->

              </div><!-- close .container -->

            </div><!-- close .progression-studios-slider-vertical-align -->
          </div><!-- close .progression-studios-slider-display-table -->

          <div class="progression-studios-slider-overlay-gradient"></div>

          <div class="progression-studios-skrn-slider-upside-down"
            style="background-image:url({{ mediaImg('original', $data['results'][0]['backdrop_path']) }});">
          </div>


        </div><!-- close .progression-studios-slider-image-background -->
      </li>

    </ul>
  </div><!-- close .progression-studios-slider - See /js/script.js file for options -->

  <div id="content-pro">

    <div class="container custom-gutters-pro">

      <div style="height:20px;"></div>


      <h2 class="post-list-heading">Populares<span>Series populares alrededor del mundo</span></h2>

      <div class="row">

        @foreach ($data['results'] as $serie)
          <div class="col col-12 col-md-6 col-lg-6">
            <div class="progression-studios-video-index-container">
              <a href="{{ route('watch', ['media_type' => 'tv', 'id' => $serie['id']]) }}">
                <div class="progression-studios-video-feaured-image"><img
                    src="{{ mediaImg('w780', $serie['backdrop_path']) }}" alt="Imagen no disponible.">
                </div>

                <div class="progression-video-index-content">
                  <div class="progression-video-index-table">
                    <div class="progression-video-index-vertical-align">

                      <h2 class="progression-video-title">{{ $serie['name'] }}</h2>

                      <div class="average-rating-video-post">
                        <div class="average-rating-video-empty">
                          <span class="dashicons dashicons-star-empty"></span><span
                            class="dashicons dashicons-star-empty"></span><span
                            class="dashicons dashicons-star-empty"></span><span
                            class="dashicons dashicons-star-empty"></span><span
                            class="dashicons dashicons-star-empty"></span>
                        </div>
                        <div class="average-rating-overflow-width" style="width:{{ $serie['vote_average'] * 10 }}%;">
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
                          @foreach (array_slice($serie['genre_ids'], 0, 1) as $id)
                            @if ($genre['id'] == $id)
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
            </div><!-- close .progression-studios-video-index-container -->
          </div><!-- close .col -->
        @endforeach

      </div><!-- close .row -->


      <div style="height:30px;"></div>

      <div class="clearfix"></div>
    </div><!-- close .container -->

  </div><!-- close #content-pro -->

@endsection
