@extends('layout.app')
@section('title', 'Ver')

@section('content')

<div id="video-page-title-pro" style="background-image:url('http://via.placeholder.com/1700x900');">
  <a class="video-page-title-play-button" id="justplay" href="#play"><i class="fas fa-play"></i></a>
  
  <div class="videoplayer-juan" id="play">
      <a href="#" id="close">X</a>
      <div class="player-container">
        <div id="playerplay" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY"></div>
      </div>
    </div>

    <div id="video-page-title-gradient-base"></div>
  </div><!-- close #video-page-title-pro -->



  <div id="content-pro">

    <div class="container custom-gutters-pro">


      <div id="video-post-container">
        <h1 class="video-post-heading-title">Grand Tour</h1>
        <div class="clearfix"></div>

        <ul id="video-post-meta-list">
          <li><a href="#!">Action</a></li>
          <li id="video-post-meta-reviews">
            <div class="average-rating-count-progression-studios">2 Reviews</div>
            <div class="average-rating-video-post">
              <div class="average-rating-video-empty">
                <span class="dashicons dashicons-star-empty"></span><span
                  class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span
                  class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span>
              </div>
              <div class="average-rating-overflow-width" style="width:90%;">
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
          <li id="video-post-meta-year">2019</li>
          <li id="video-post-meta-rating"><span>TV-MA</span></li>
        </ul>
        <div class="clearfix"></div>

        <div id="video-post-buttons-container">
          <a href="#Video-Single" class="afterglow" id="video-post-play-text-btn"><i
              class="fas fa-play"></i>Play</a>
          <div style="display:none;">
            <video id="Video-Single" width="960" height="540" data-youtube-id="jirBNu6mcWM"></video>
          </div>

          <a href="#!" class="wishlist-button-pro"><i class="fas fa-plus-circle"></i>Add to List</a>
          <div id="video-social-sharing-button" class="btn"><i class="fas fa-share"></i>Share</div>
          <div class="clearfix"></div>
        </div><!-- close #video-post-buttons-container -->

        <div id="vayvo-video-post-content">
          <p>The Tour de France is an annual men's multiple stage bicycle race primarily held in France, while also
            occasionally passing through nearby countries. Like the other Grand Tours, it consists of 21 day-long stages
            over the course of 23 days. The race was first organized in 1903 to increase sales for the newspaper.</p>
        </div><!-- #vayvo-video-post-content -->


        <div class="vayvo-progression-video-season-container">
          <ul class="vayvo-progression-video-season-navigation">
            <li class="current progression-video-season-title">
              <a href="#!">Season 1</a>
            </li>
            <li class="progression-video-season-title">
              <a href="#!">Season 2</a>
            </li>
          </ul>
          <div class=".clearfix"></div>

          <ul class="progression-studios-episode-list-main">
            <li class="progression-studios-episode-list-item">
              <div class="progression-episode-list-flex">

                <div class="progression-studios-episode-image-container">
                  <div class="progression-episode-list-left-margin">

                    <a href="Video-Season-1-Ep-1" class="afterglow">
                      <div class="progression-episode-list-image-container">

                        <img
                          src="https://vayvo.progressionstudios.com/wp-content/uploads/2019/02/tanja-heffner-196114.jpg"
                          alt="1. The Holy Trinity">

                        <div class="progression-episode-list-overlay-play">
                          <i class="fas fa-play"></i>
                        </div>
                      </div>
                      <!-- close .progression-episode-list-image-container -->
                    </a>
                    <div style="display:none;">
                      <video id="Video-Season-1-Ep-1" width="960" height="540" data-youtube-id="kLtpcxtk4HI"></video>
                    </div>

                  </div>
                  <!-- close .progression-episode-list-left-margin -->
                </div>
                <!-- close  .progression-studios-episode-image-container -->

                <div class="progression-studios-episode-right-container">
                  <div class="progression-episode-list-right-margin">
                    <a href="Video-Season-1-Ep-1" class="afterglow">
                      <h2 class="progression-episode-list-title">1. The Holy Trinity</h2>
                    </a>

                    <ul class="progression-studios-episode-list-meta">
                      <li class="progression-episode-season-meta-title">Season 1</li>
                      <li class="progression-episode-list-meta-release-date">October 23, 2018</li>
                    </ul>

                    <div class="progression-episode-list-short-description">Add-in a short description about each episode
                      here. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                      printer.</div>
                  </div>
                  <!-- close .progression-episode-list-right-margin -->
                </div>
                <!-- close  .progression-studios-episode-right-container -->

                <div class=".clearfix"></div>
              </div>
              <!-- close .progression-episode-list-flex -->
            </li>
            <li class="progression-studios-episode-list-item">
              <div class="progression-episode-list-flex">

                <div class="progression-studios-episode-image-container">
                  <div class="progression-episode-list-left-margin">

                    <a href="Video-Season-1-Ep-2" class="afterglow">
                      <div class="progression-episode-list-image-container">

                        <img
                          src="https://vayvo.progressionstudios.com/wp-content/uploads/2019/02/andreas-fidler-437916.jpg"
                          alt="2. Operation Desert Stumble">

                        <div class="progression-episode-list-overlay-play">
                          <i class="fas fa-play"></i>
                        </div>
                      </div>
                      <!-- close .progression-episode-list-image-container -->
                    </a>
                    <div style="display:none;">
                      <video id="Video-Season-1-Ep-2" width="960" height="540" data-youtube-id="kLtpcxtk4HI"></video>
                    </div>

                  </div>
                  <!-- close .progression-episode-list-left-margin -->
                </div>
                <!-- close  .progression-studios-episode-image-container -->

                <div class="progression-studios-episode-right-container">
                  <div class="progression-episode-list-right-margin">
                    <a href="Video-Season-1-Ep-2" class="afterglow">
                      <h2 class="progression-episode-list-title">2. Operation Desert Stumble</h2>
                    </a>

                    <ul class="progression-studios-episode-list-meta">
                      <li class="progression-episode-season-meta-title">Season 1</li>
                      <li class="progression-episode-list-meta-release-date">October 15, 2018</li>
                    </ul>

                    <div class="progression-episode-list-short-description">Add-in a short description about each episode
                      here. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                      printer.</div>
                  </div>
                  <!-- close .progression-episode-list-right-margin -->
                </div>
                <!-- close  .progression-studios-episode-right-container -->

                <div class=".clearfix"></div>
              </div>
              <!-- close .progression-episode-list-flex -->
            </li>
            <li class="progression-studios-episode-list-item">
              <div class="progression-episode-list-flex">

                <div class="progression-studios-episode-image-container">
                  <div class="progression-episode-list-left-margin">

                    <a href="Video-Season-1-Ep-3" class="afterglow">
                      <div class="progression-episode-list-image-container">

                        <img
                          src="https://vayvo.progressionstudios.com/wp-content/uploads/2019/02/william-stitt-162607-unsplash.jpg"
                          alt="3. Opera, Art and Donuts">

                        <div class="progression-episode-list-overlay-play">
                          <i class="fas fa-play"></i>
                        </div>
                      </div>
                      <!-- close .progression-episode-list-image-container -->
                    </a>
                    <div style="display:none;">
                      <video id="Video-Season-1-Ep-3" width="960" height="540" data-youtube-id="kLtpcxtk4HI"></video>
                    </div>

                  </div>
                  <!-- close .progression-episode-list-left-margin -->
                </div>
                <!-- close  .progression-studios-episode-image-container -->

                <div class="progression-studios-episode-right-container">
                  <div class="progression-episode-list-right-margin">
                    <a href="Video-Season-1-Ep-3" class="afterglow">
                      <h2 class="progression-episode-list-title">3. Opera, Art and Donuts</h2>
                    </a>

                    <ul class="progression-studios-episode-list-meta">
                      <li class="progression-episode-season-meta-title">Season 1</li>
                      <li class="progression-episode-list-meta-release-date">October 15, 2018</li>
                    </ul>

                    <div class="progression-episode-list-short-description">Add-in a short description about each episode
                      here. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                      printer.</div>
                  </div>
                  <!-- close .progression-episode-list-right-margin -->
                </div>
                <!-- close  .progression-studios-episode-right-container -->

                <div class=".clearfix"></div>
              </div>
              <!-- close .progression-episode-list-flex -->
            </li>
          </ul>
          <div class=".clearfix"></div>
        </div><!-- close .vayvo-progression-video-season-container -->

      </div><!-- close #video-post-container -->



      <div id="video-post-sidebar">
        <div class="content-sidebar-section video-sidebar-section-release-date">
          <h4 class="content-sidebar-sub-header">Release Date</h4>
          <div class="content-sidebar-short-description">January 17, 2019</div>
        </div><!-- close .content-sidebar-section -->

        <div class="content-sidebar-section video-sidebar-section-length">
          <h4 class="content-sidebar-sub-header">Duration</h4>
          <div class="content-sidebar-short-description">1 hr 43 min</div>
        </div><!-- close .content-sidebar-section -->

        <div id="video-post-recent-reviews-sidebar">
          <h3 class="content-sidebar-reviews-header">Recent Reviews</h3>

          <ul class="sidebar-reviews-pro">
            <li>
              <div class="progression-studios-sidebar-review-container">

                <!--div id="sidebar-review-number">5</div-->
                <div id="sidebar-review-rating-container">
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
                  </div>
                </div>


                <h5 id="sidebar-review-author">Jane Doe</h5>
                <h6 id="sidebar-review-date">September 17, 2019</h6>

                <div class="sidebar-comment-exerpt">
                  <div class="sidebar-comment-exerpt-text">Fantastic!</div>
                </div>


              </div><!-- close .progression-studios-sidebar-review-container -->
            </li>

            <li>
              <div class="progression-studios-sidebar-review-container">
                <div id="sidebar-review-rating-container">
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
                  </div>
                </div>
                <h5 id="sidebar-review-author">Laura Mills</h5>
                <h6 id="sidebar-review-date">February 16, 2019</h6>
                <div class="spoiler-review">Contains Spoiler</div>

                <div class="sidebar-comment-exerpt sidebar-excerpt-more-click">
                  <div class="sidebar-comment-exerpt-text">I have been a cinema lover for years, read a lot of reviews on
                    Vayvo . Lorem ipsum dolor sit...</div>
                  <div class="read-more-comment-sidebar">Read more</div>
                </div>
              </div><!-- close .progression-studios-sidebar-review-container -->
            </li>
          </ul>

          <div id="all-reviews-button-progression">See All Reviews</div>
        </div><!-- close #video-post-recent-reviews-sidebar -->

        <div class="clearfix"></div>
      </div>
      <!-- close #video-post-sidebar -->


      <div class="clearfix"></div>
    </div><!-- close .container -->



  </div><!-- close #content-pro -->

@endsection
