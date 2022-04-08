<div>
  <div class="row">
    {{-- {{dd($dataPopular)}} --}}
    @foreach ($dataPopular as $popular)
      <div class="col col-12 col-md-6 col-lg-4">
        <div class="progression-studios-video-index-container">
          <a href="{{ route('watch', ['id' => $popular['id'], 'media_type' => 'tv']) }}">
            <div class="progression-studios-video-feaured-image"><img
                src="{{ $popular['backdrop_path'] ? mediaImg('w780', $popular['backdrop_path']) : asset('images/not_found.svg') }}"
                alt="Imagen no disponible" style="max-height: 217px"></div>
            <div class="progression-video-index-content">
              <div class="progression-video-index-table">
                <div class="progression-video-index-vertical-align">

                  <h2 class="progression-video-title">{{ $popular['name'] }}</h2>

                  <div class="average-rating-video-post">
                    <div class="average-rating-video-empty">
                      <span class="dashicons dashicons-star-empty"></span><span
                        class="dashicons dashicons-star-empty"></span><span
                        class="dashicons dashicons-star-empty"></span><span
                        class="dashicons dashicons-star-empty"></span><span
                        class="dashicons dashicons-star-empty"></span>
                    </div>
                    <div class="average-rating-overflow-width" style="width:{{ $popular['vote_average'] * 10 }}%;">
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
                      @foreach (array_slice($popular['genre_ids'], 0, 1) as $ids)
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
        </div><!-- close .progression-studios-video-index-container -->
      </div><!-- close .col -->
    @endforeach

    {{-- 9 series aki jj @ juan --}}



    <div class="clearfix"></div>

  </div><!-- close .row -->

  <ul class="page-numbers">
    <li><a class="previous" href="#!" wire:click="goto({{ $page - 1 }})"><i
          class="fas fa-chevron-left"></i></a></li>

    @if ($page - 1 >= 1)
      <li><a href="#!" wire:click="goto({{ $page - 1 }})">{{ $page - 1 }}</a></li>
    @endif
    @for ($i = $page; $i <= $page + 1; $i++)
      <li><a class="{{ $page == $i ? 'current' : '' }}" href="#!"
          wire:click="goto({{ $i }})">{{ $i }}</a></li>
    @endfor

    <li><a class="next page-numbers-select" href="#!" wire:click="goto({{ $page + 1 }})"><i
          class="fas fa-chevron-right"></i></a></li>
  </ul>
</div>
