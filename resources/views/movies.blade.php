@extends('layout.app')
@section('title', 'Películas')

@section('content')
  <div class="flexslider progression-studios-slider">
    <ul class="slides">
      <li class="progression_studios_animate_left">
        <div class="progression-studios-slider-image-background"
          style="background-image:url(http://via.placeholder.com/1700x1133);">
          <div class="progression-studios-slider-display-table">
            <div class="progression-studios-slider-vertical-align">

              <div class="container">

                <div class="progression-studios-slider-caption-width">
                  <div class="progression-studios-slider-caption-align">
                    <h2><a href="video-post.html">Baby Shark Yaoi</a></h2>
                    <ul class="slider-video-post-meta-list">
                      <li class="slider-video-post-meta-cat">
                        <ul>
                          <li><a href="#!">Mona China</a></li>
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
                          <div class="average-rating-overflow-width" style="width:100%;">
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
                      <li class="slider-video-post-meta-year">2022</li>
                      <li class="slider-video-post-meta-rating"><span>PG-30</span></li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="progression-studios-slider-excerpt">Mae Holland seizes the opportunity of a lifetime
                      when she lands a job with the world’s most powerful technology and social media company.</div>
                    <a class="btn btn-slider-pro afterglow" href="#VideoLightbox-1"><i
                        class="fas fa-play-circle"></i>Watch Now</a>

                  </div><!-- close .progression-studios-slider-caption-align -->
                </div><!-- close .progression-studios-slider-caption-width -->

              </div><!-- close .container -->

            </div><!-- close .progression-studios-slider-vertical-align -->
          </div><!-- close .progression-studios-slider-display-table -->

          <div class="progression-studios-slider-overlay-gradient"></div>

          <div class="progression-studios-skrn-slider-upside-down"
            style="background-image:url(http://via.placeholder.com/1700x1133);"></div>


        </div><!-- close .progression-studios-slider-image-background -->
      </li>

    </ul>
  </div><!-- close .progression-studios-slider - See /js/script.js file for options -->

  <div id="content-pro">

    <div class="container custom-gutters-pro">

      <div style="height:20px;"></div>


      <ul class="progression-filter-button-group">
        <li class="pro-selected">All</li>
        <li>Action</li>
        <li>Drama</li>
        <li>Sci-fi</li>
      </ul>

      <div class="row">

        <div class="col col-12 col-md-6 col-lg-6">
          <div class="progression-studios-video-index-container">
            <a href="video-seasons-post.html">
              <div class="progression-studios-video-feaured-image"><img src="http://via.placeholder.com/700x480"
                  alt="Featured Image"></div>

              <div class="progression-video-index-content">
                <div class="progression-video-index-table">
                  <div class="progression-video-index-vertical-align">

                    <h2 class="progression-video-title">Planet Earth</h2>

                    <div class="average-rating-video-post">
                      <div class="average-rating-video-empty">
                        <span class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span>
                      </div>
                      <div class="average-rating-overflow-width" style="width:70%;">
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
                      <li>Drama</li>
                    </ul>
                    <div class="clearfix"></div>

                  </div><!-- close .progression-video-index-vertical-align -->
                </div><!-- close .progression-video-index-table -->
              </div><!-- close .progression-video-index-content -->
              <div class="video-index-border-hover"></div>

            </a>
          </div><!-- close .progression-studios-video-index-container -->
        </div><!-- close .col -->

      </div><!-- close .row -->


      <div style="height:30px;"></div>

      <div class="clearfix"></div>
    </div><!-- close .container -->

  </div><!-- close #content-pro -->

@endsection
