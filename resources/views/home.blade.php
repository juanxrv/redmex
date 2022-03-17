@extends('layout.app')
@section('title', 'Inicio')

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
                    <h2><a href="video-post.html">Blue Surf</a></h2>
                    <ul class="slider-video-post-meta-list">
                      <li class="slider-video-post-meta-cat">
                        <ul>
                          <li><a href="#!">Drama</a></li>
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
                          <div class="average-rating-overflow-width" style="width:80%;">
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
                      <li class="slider-video-post-meta-year">2019</li>
                      <li class="slider-video-post-meta-rating"><span>PG-13</span></li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="progression-studios-slider-excerpt">Mae Holland seizes the opportunity of a lifetime
                      when she lands a job with the world’s most powerful technology and social media company.</div>
                    <a class="btn btn-slider-pro afterglow" href="#VideoLightbox-1"><i
                        class="fas fa-play-circle"></i>Watch Now</a>

                    <video id="VideoLightbox-1" poster="http://via.placeholder.com/960x540" width="960" height="540">
                      <source src="{{ asset('images/video/sample.mp4') }}" type="video/mp4">
                    </video>

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
      <li class="progression_studios_animate_in">
        <div class="progression-studios-slider-image-background"
          style="background-image:url(http://via.placeholder.com/1700x1133);">
          <div class="progression-studios-slider-display-table">
            <div class="progression-studios-slider-vertical-align">

              <div class="container">

                <div class="progression-studios-slider-caption-width">
                  <div class="progression-studios-slider-caption-align">
                    <h2><a href="video-post.html">Grand Tour</a></h2>
                    <ul class="slider-video-post-meta-list">
                      <li class="slider-video-post-meta-cat">
                        <ul>
                          <li><a href="#!">Action</a></li>
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
                          <div class="average-rating-overflow-width" style="width:90%;">
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
                      <li class="slider-video-post-meta-year">2018</li>
                      <li class="slider-video-post-meta-rating"><span>TV-MA</span></li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="progression-studios-slider-excerpt">The Tour de France is an annual men’s multiple
                      stage
                      bicycle race primarily held in France, while also occasionally passing through nearby countries.
                    </div>
                    <a class="btn btn-slider-pro afterglow" href="#VideoLightbox-2"><i
                        class="fas fa-play-circle"></i>Watch Trailer</a>

                    <video id="VideoLightbox-2" poster="http://via.placeholder.com/960x540" width="960" height="540">
                      <source src="{{ asset('images/video/sample.mp4') }}" type="video/mp4">
                    </video>

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
      <li class="progression_studios_animate_right">
        <div class="progression-studios-slider-image-background"
          style="background-image:url(http://via.placeholder.com/1700x1133);">
          <div class="progression-studios-slider-display-table">
            <div class="progression-studios-slider-vertical-align">

              <div class="container">

                <div class="progression-studios-slider-caption-width">
                  <div class="progression-studios-slider-caption-align">
                    <h2><a href="video-post.html">Fast &amp; Furious</a></h2>
                    <ul class="slider-video-post-meta-list">
                      <li class="slider-video-post-meta-cat">
                        <ul>
                          <li><a href="#!">Action</a></li>
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
                          <div class="average-rating-overflow-width" style="width:90%;">
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
                      <li class="slider-video-post-meta-year">2018</li>
                      <li class="slider-video-post-meta-rating"><span>PG-13</span></li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="progression-studios-slider-excerpt">Mae Holland seizes the opportunity of a lifetime
                      when she lands a job with the world’s most powerful technology and social media company.</div>
                    <a class="btn btn-slider-pro afterglow" href="#VideoLightbox-3"><i
                        class="fas fa-play-circle"></i>Watch Now</a>

                    <video id="VideoLightbox-3" poster="http://via.placeholder.com/960x540" width="960" height="540">
                      <source src="{{ asset('images/video/sample.mp4') }}" type="video/mp4">
                    </video>

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

      <div style="height:15px;"></div>

      <h2 class="post-list-heading">Featured<span>These Picks Won't Disappoint</span></h2>


      <div class="progression-studios-elementor-carousel-container progression-studios-always-arrows-on">
        <div id="progression-video-carousel" class="owl-carousel progression-carousel-theme">

          <div class="item">
            <div class="progression-studios-video-index-container">
              <a href="video-post.html">
                <div class="progression-studios-video-feaured-image"><img src="http://via.placeholder.com/700x480"
                    alt="Featured Image"></div>

                <div class="progression-video-index-content">
                  <div class="progression-video-index-table">
                    <div class="progression-video-index-vertical-align">

                      <h2 class="progression-video-title">Space Time</h2>

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

                      <ul class="video-index-meta-taxonomy">
                        <li>Sci-fi</li>
                      </ul>
                      <div class="clearfix"></div>

                    </div><!-- close .progression-video-index-vertical-align -->
                  </div><!-- close .progression-video-index-table -->
                </div><!-- close .progression-video-index-content -->
                <div class="video-index-border-hover"></div>

              </a>
            </div><!-- close .progression-studios-video-index-container  -->
          </div><!-- close .item -->

          <div class="item">
            <div class="progression-studios-video-index-container">
              <a href="video-post.html">

                <div class="progression-studios-video-feaured-image"><img src="http://via.placeholder.com/700x480"
                    alt="Featured Image"></div>

                <div class="progression-video-index-content">
                  <div class="progression-video-index-table">
                    <div class="progression-video-index-vertical-align">

                      <h2 class="progression-video-title">The Dark Tower</h2>

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
                        <li>Sci-fi</li>
                      </ul>
                      <div class="clearfix"></div>

                    </div><!-- close .progression-video-index-vertical-align -->
                  </div><!-- close .progression-video-index-table -->
                </div><!-- close .progression-video-index-content -->
                <div class="video-index-border-hover"></div>

              </a>
            </div><!-- close .progression-studios-video-index-container -->
          </div><!-- close .item -->


          <div class="item">
            <div class="progression-studios-video-index-container">
              <a href="video-post.html">

                <div class="progression-studios-video-feaured-image"><img src="http://via.placeholder.com/700x480"
                    alt="Featured Image"></div>

                <div class="progression-video-index-content">
                  <div class="progression-video-index-table">
                    <div class="progression-video-index-vertical-align">

                      <h2 class="progression-video-title">Designing for the Future</h2>

                      <div class="average-rating-video-post">
                        <div class="average-rating-video-empty">
                          <span class="dashicons dashicons-star-empty"></span><span
                            class="dashicons dashicons-star-empty"></span><span
                            class="dashicons dashicons-star-empty"></span><span
                            class="dashicons dashicons-star-empty"></span><span
                            class="dashicons dashicons-star-empty"></span>
                        </div>
                        <div class="average-rating-overflow-width" style="width:80%;">
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
                        <li>Sci-fi</li>
                      </ul>
                      <div class="clearfix"></div>

                    </div><!-- close .progression-video-index-vertical-align -->
                  </div><!-- close .progression-video-index-table -->
                </div><!-- close .progression-video-index-content -->
                <div class="video-index-border-hover"></div>

              </a>
            </div><!-- close .progression-studios-video-index-container -->
          </div><!-- close .item -->

          <div class="item">
            <div class="progression-studios-video-index-container">
              <a href="video-post.html">

                <div class="progression-studios-video-feaured-image"><img src="http://via.placeholder.com/700x480"
                    alt="Featured Image"></div>

                <div class="progression-video-index-content">
                  <div class="progression-video-index-table">
                    <div class="progression-video-index-vertical-align">

                      <h2 class="progression-video-title">Art of Flight</h2>

                      <div class="average-rating-video-post">
                        <div class="average-rating-video-empty">
                          <span class="dashicons dashicons-star-empty"></span><span
                            class="dashicons dashicons-star-empty"></span><span
                            class="dashicons dashicons-star-empty"></span><span
                            class="dashicons dashicons-star-empty"></span><span
                            class="dashicons dashicons-star-empty"></span>
                        </div>
                        <div class="average-rating-overflow-width" style="width:90%;">
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
                        <li>Action</li>
                      </ul>
                      <div class="clearfix"></div>

                    </div><!-- close .progression-video-index-vertical-align -->
                  </div><!-- close .progression-video-index-table -->
                </div><!-- close .progression-video-index-content -->
                <div class="video-index-border-hover"></div>

              </a>
            </div><!-- close .progression-studios-video-index-container -->
          </div><!-- close .item -->


          <div class="item">
            <div class="progression-studios-video-index-container">
              <a href="video-post.html">

                <div class="progression-studios-video-feaured-image"><img src="http://via.placeholder.com/700x480"
                    alt="Featured Image"></div>

                <div class="progression-video-index-content">
                  <div class="progression-video-index-table">
                    <div class="progression-video-index-vertical-align">

                      <h2 class="progression-video-title">Parts Unkown</h2>

                      <div class="average-rating-video-post">
                        <div class="average-rating-video-empty">
                          <span class="dashicons dashicons-star-empty"></span><span
                            class="dashicons dashicons-star-empty"></span><span
                            class="dashicons dashicons-star-empty"></span><span
                            class="dashicons dashicons-star-empty"></span><span
                            class="dashicons dashicons-star-empty"></span>
                        </div>
                        <div class="average-rating-overflow-width" style="width:50%;">
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
                        <li>Action, Drama</li>
                      </ul>
                      <div class="clearfix"></div>

                    </div><!-- close .progression-video-index-vertical-align -->
                  </div><!-- close .progression-video-index-table -->
                </div><!-- close .progression-video-index-content -->
                <div class="video-index-border-hover"></div>

              </a>
            </div><!-- close .progression-studios-video-index-container -->
          </div><!-- close .item -->

        </div><!-- close #progression-video-carousel - See /js/script.js file for options -->
      </div><!-- close .progression-studios-elementor-carousel-container  -->

      <div class="clearfix"></div>



      <div style="height:85px;"></div>

      <h2 class="post-list-heading">New Arrivals<span>Find Something New to Watch</span></h2>

      <div class="row">

        <div class="col col-12 col-md-6 col-lg-4">
          <div class="progression-studios-video-index-container">
            <a href="video-post.html">
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

        <div class="col col-12 col-md-6 col-lg-4">
          <div class="progression-studios-video-index-container">
            <a href="video-post.html">

              <div class="progression-studios-video-feaured-image"><img src="http://via.placeholder.com/700x480"
                  alt="Featured Image"></div>

              <div class="progression-video-index-content">
                <div class="progression-video-index-table">
                  <div class="progression-video-index-vertical-align">

                    <h2 class="progression-video-title">Polar Express</h2>

                    <div class="average-rating-video-post">
                      <div class="average-rating-video-empty">
                        <span class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span>
                      </div>
                      <div class="average-rating-overflow-width" style="width:90%;">
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
                      <li>Sci-fi</li>
                    </ul>
                    <div class="clearfix"></div>

                  </div><!-- close .progression-video-index-vertical-align -->
                </div><!-- close .progression-video-index-table -->
              </div><!-- close .progression-video-index-content -->
              <div class="video-index-border-hover"></div>

            </a>
          </div><!-- close .progression-studios-video-index-container -->
        </div><!-- close .col -->

        <div class="col col-12 col-md-6 col-lg-4">
          <div class="progression-studios-video-index-container">
            <a href="video-post.html">

              <div class="progression-studios-video-feaured-image"><img src="http://via.placeholder.com/700x480"
                  alt="Featured Image"></div>

              <div class="progression-video-index-content">
                <div class="progression-video-index-table">
                  <div class="progression-video-index-vertical-align">

                    <h2 class="progression-video-title">World's Busiest City</h2>

                    <div class="average-rating-video-post">
                      <div class="average-rating-video-empty">
                        <span class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span>
                      </div>
                      <div class="average-rating-overflow-width" style="width:60%;">
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
                      <li>Action</li>
                    </ul>
                    <div class="clearfix"></div>

                  </div><!-- close .progression-video-index-vertical-align -->
                </div><!-- close .progression-video-index-table -->
              </div><!-- close .progression-video-index-content -->
              <div class="video-index-border-hover"></div>

            </a>
          </div><!-- close .progression-studios-video-index-container -->
        </div><!-- close .col -->

        <div class="col col-12 col-md-6 col-lg-4">
          <div class="progression-studios-video-index-container">
            <a href="video-post.html">
              <div class="progression-studios-video-feaured-image"><img src="http://via.placeholder.com/700x480"
                  alt="Featured Image"></div>

              <div class="progression-video-index-content">
                <div class="progression-video-index-table">
                  <div class="progression-video-index-vertical-align">

                    <h2 class="progression-video-title">South Pacific</h2>

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

        <div class="col col-12 col-md-6 col-lg-4">
          <div class="progression-studios-video-index-container">
            <a href="video-post.html">

              <div class="progression-studios-video-feaured-image"><img src="http://via.placeholder.com/700x480"
                  alt="Featured Image"></div>

              <div class="progression-video-index-content">
                <div class="progression-video-index-table">
                  <div class="progression-video-index-vertical-align">

                    <h2 class="progression-video-title">Mad Profit</h2>

                    <div class="average-rating-video-post">
                      <div class="average-rating-video-empty">
                        <span class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span>
                      </div>
                      <div class="average-rating-overflow-width" style="width:90%;">
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

        <div class="col col-12 col-md-6 col-lg-4">
          <div class="progression-studios-video-index-container">
            <a href="video-post.html">

              <div class="progression-studios-video-feaured-image"><img src="http://via.placeholder.com/700x480"
                  alt="Featured Image"></div>

              <div class="progression-video-index-content">
                <div class="progression-video-index-table">
                  <div class="progression-video-index-vertical-align">

                    <h2 class="progression-video-title">Geostorm</h2>

                    <div class="average-rating-video-post">
                      <div class="average-rating-video-empty">
                        <span class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span>
                      </div>
                      <div class="average-rating-overflow-width" style="width:50%;">
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
                      <li>Sci-fi</li>
                    </ul>
                    <div class="clearfix"></div>

                  </div><!-- close .progression-video-index-vertical-align -->
                </div><!-- close .progression-video-index-table -->
              </div><!-- close .progression-video-index-content -->
              <div class="video-index-border-hover"></div>

            </a>
          </div><!-- close .progression-studios-video-index-container -->
        </div><!-- close .col -->


        <div class="col col-12 col-md-6 col-lg-4">
          <div class="progression-studios-video-index-container">
            <a href="video-post.html">
              <div class="progression-studios-video-feaured-image"><img src="http://via.placeholder.com/700x480"
                  alt="Featured Image"></div>

              <div class="progression-video-index-content">
                <div class="progression-video-index-table">
                  <div class="progression-video-index-vertical-align">

                    <h2 class="progression-video-title">Space Time</h2>

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

                    <ul class="video-index-meta-taxonomy">
                      <li>Sci-fi</li>
                    </ul>
                    <div class="clearfix"></div>

                  </div><!-- close .progression-video-index-vertical-align -->
                </div><!-- close .progression-video-index-table -->
              </div><!-- close .progression-video-index-content -->
              <div class="video-index-border-hover"></div>

            </a>
          </div><!-- close .progression-studios-video-index-container -->
        </div><!-- close .col -->

        <div class="col col-12 col-md-6 col-lg-4">
          <div class="progression-studios-video-index-container">
            <a href="video-post.html">

              <div class="progression-studios-video-feaured-image"><img src="http://via.placeholder.com/700x480"
                  alt="Featured Image"></div>

              <div class="progression-video-index-content">
                <div class="progression-video-index-table">
                  <div class="progression-video-index-vertical-align">

                    <h2 class="progression-video-title">Bloodline</h2>

                    <div class="average-rating-video-post">
                      <div class="average-rating-video-empty">
                        <span class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span><span
                          class="dashicons dashicons-star-empty"></span>
                      </div>
                      <div class="average-rating-overflow-width" style="width:90%;">
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
                      <li>Sci-fi</li>
                    </ul>
                    <div class="clearfix"></div>

                  </div><!-- close .progression-video-index-vertical-align -->
                </div><!-- close .progression-video-index-table -->
              </div><!-- close .progression-video-index-content -->
              <div class="video-index-border-hover"></div>

            </a>
          </div><!-- close .progression-studios-video-index-container -->
        </div><!-- close .col -->

        <div class="col col-12 col-md-6 col-lg-4">
          <div class="progression-studios-video-index-container">
            <a href="video-post.html">

              <div class="progression-studios-video-feaured-image"><img src="http://via.placeholder.com/700x480"
                  alt="Featured Image"></div>

              <div class="progression-video-index-content">
                <div class="progression-video-index-table">
                  <div class="progression-video-index-vertical-align">

                    <h2 class="progression-video-title">The Dark Tower</h2>

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
                      <li>Sci-fi</li>
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


      <ul class="page-numbers">
        <li><a class="previous" href="#!"><i class="fas fa-chevron-left"></i></a></li>
        <li><a class="current" href="#!">1</a></li>
        <li><a href="#!">2</a></li>
        <li><a href="#!">3</a></li>
        <li><a href="#!">4</a></li>
        <li><a class="next page-numbers-select" href="#!"><i class="fas fa-chevron-right"></i></a></li>
      </ul>


      <div class="clearfix"></div>
    </div><!-- close .container -->



  </div><!-- close #content-pro -->

  <a href="#0" id="pro-scroll-top"><i class="fas fa-chevron-up"></i></a>


  <!-- Modal -->
  <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModal"
    aria-hidden="true">
    <button type="button" class="close float-close-pro noselect" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header-pro">
          <h2>Please login</h2>
        </div>
        <div class="modal-body-pro social-login-modal-body-pro">

          <div class="registration-login-container">
            <form>
              <div class="form-group">
                <input type="text" class="form-control" id="username" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="password" placeholder="Password">
              </div>
              <div class="container-fluid">
                <div class="row no-gutters">
                  <div class="col checkbox-remember-pro"><input type="checkbox" id="checkbox-remember"><label
                      for="checkbox-remember" class="col-form-label">Remember me</label></div>
                  <div class="col forgot-your-password"><a href="#!">Forgot your password?</a></div>
                </div>
              </div><!-- close .container-fluid -->
              <div class="form-group aligncenter">
                <button type="button" class="btn">Login</button>
              </div>

              <div class="aligncenter"><a class="not-a-member-pro" href="landing-pricing-plans.html">¿No tienes una cuenta? <span>Regístrate</span></a></div>



            </form>

          </div><!-- close .registration-login-container -->

        </div><!-- close .modal-body -->

      </div><!-- close .modal-content -->
    </div><!-- close .modal-dialog -->
  </div><!-- close .modal -->
@endsection
