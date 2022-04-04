@extends('layout.app')
@section('title', auth()->user()->name)

@section('content')
  <div id="content-pro">

    <div class="container custom-gutters-pro">

      <div id="vayvo-progression-author-sidebar">
        <div id="content-sidebar-info">
          <div id="avatar-sidebar-large-profile" style="background-image:url('http://via.placeholder.com/400x500')">
          </div>
          <div id="profile-sidebar-gradient"></div>
          <a href="#!" class="edit-profile-sidebar">Edit</a>
        </div><!-- close .content-sidebar-info -->

        <div id="vayvo-profile-sidebar-name">
          <h5>Jane Doe</h5>
          <h6>United States</h6>
          <ul class="profile-social-media-sidebar-icons">
            <li><a target="_blank" href="http://facebook.com/progressionstudios/"><i class="fab fa-facebook"></i></a>
            </li>
            <li><a target="_blank" href="http://twitter.com/progression_s"><i class="fab fa-twitter"></i></a></li>
            <li><a target="_blank" href="#!"><i class="fab fa-linkedin"></i></a></li>
            <li><a target="_blank" href="#!"><i class="fab fa-instagram"></i></a></li>
            <li><a target="_blank" href="#!"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </div><!-- close #vayvo-profile-sidebar-name -->

        <div class="content-sidebar-section">
          <h3 class="content-sidebar-sub-header">User Stats</h3>
          <ul id="profile-watched-stats">
            <li>
              <span>5</span>
              Watchlist
            </li>
            <li>
              <span>8</span>
              Reviews
            </li>
          </ul>
        </div>
        <!-- close .content-sidebar-section -->

        <div class="content-sidebar-section">
          <h3 class="content-sidebar-sub-header">Member Since</h3>
          <div class="content-sidebar-simple-text">
            February 16, 2019 </div>
        </div>
        <!-- close .content-sidebar-section -->

        <div class="content-sidebar-section">
          <h3 class="content-sidebar-sub-header">Biography</h3>
          <div class="content-sidebar-biography-text">
            Easily add-in a biography for your profile page... </div>
        </div>
        <!-- close .content-sidebar-section -->

      </div><!-- close #vayvo-progression-author-content-sidebar -->

      <div id="vayvo-progression-author-content-container">
        <ul id="dashboard-sub-menu">
          <li class="current"><a href="#!">Watchlist</a></li>
          <li><a href="#!">Reviews</a></li>
        </ul>
        <!-- close #dashboard-sub-menu -->

        <div class="row">

          <div class="col col-12 col-md-6 col-lg-6">
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

          

        </div><!-- close .row -->

      </div><!-- close #vayvo-progression-author-content-container -->




      <div class="clearfix"></div>
    </div><!-- close .container -->



  </div><!-- close #content-pro -->
@endsection
