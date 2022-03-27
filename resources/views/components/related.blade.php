<div id="video-more-like-this-details-section">
  <h3 id="more-videos-heading">También podría gustarte</h3>

  <div class="row">
    {{-- {{dd($similar)}} --}}
    @foreach ($similar as $video)
      <div class="col col-12 col-md-6 col-lg-6">
        <div class="progression-studios-video-index-container">
          <a href="{{ route('watch', [$video['id'], 'media_type' => 'movie']) }}">
            <div class="progression-studios-video-feaured-image"><img
              @if ($video['backdrop_path'])
                src="{{ $apibase }}/original/{{ $video['backdrop_path'] }}" alt="Featured Image"></div>
              @else
                src="{{ asset('images/not_found.svg') }}" style="max-height: 239px" alt="Featured Image"></div>
              @endif
            <div class="progression-video-index-content">
              <div class="progression-video-index-table">
                <div class="progression-video-index-vertical-align">

                  <h2 class="progression-video-title">{{ $video['title'] }}</h2>

                  <div class="average-rating-video-post">
                    <div class="average-rating-video-empty">
                      <span class="dashicons dashicons-star-empty"></span><span
                        class="dashicons dashicons-star-empty"></span><span
                        class="dashicons dashicons-star-empty"></span><span
                        class="dashicons dashicons-star-empty"></span><span
                        class="dashicons dashicons-star-empty"></span>
                    </div>
                    <div class="average-rating-overflow-width" style="width:{{ $video['vote_average'] * 10 }}%;">
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
    @endforeach

  </div><!-- close .row -->

  <div style="height:10px;"></div>

</div><!-- close #video-more-like-this-details-section -->
