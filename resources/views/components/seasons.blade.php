<div class="vayvo-progression-video-season-container">
  <ul class="vayvo-progression-video-season-navigation">
    @for ($i = 0; $i < $data['number_of_seasons']; $i++)
      <li class="progression-video-season-title {{ $i == 0 ? 'current' : '' }}">
        <a href="#!" data-season-id="{{ $i + 1 }}">Temporada {{ $i + 1 }}</a>
      </li>
    @endfor
  </ul>
  <div class=".clearfix"></div>
  <ul class="progression-studios-episode-list-main">
    <template id="episodio">
      <li class="progression-studios-episode-list-item smooth-anim">
        <div class="progression-episode-list-flex">

          <div class="progression-studios-episode-image-container">
            <div class="progression-episode-list-left-margin">

              <a href="#" class="afterglow">
                <div class="progression-episode-list-image-container">
                  <img id="episodio-img" src="" alt="Imagen no disponible.">

                  <div class="progression-episode-list-overlay-play">
                    <i class="fas fa-play"></i>
                  </div>
                </div>
                <!-- close .progression-episode-list-image-container -->
              </a>

            </div>
            <!-- close .progression-episode-list-left-margin -->
          </div>
          <!-- close  .progression-studios-episode-image-container -->

          <div class="progression-studios-episode-right-container">
            <div class="progression-episode-list-right-margin">
              <a href="#" class="afterglow">
                <h2 class="progression-episode-list-title">1. The Holy Trinity</h2>
              </a>

              <ul class="progression-studios-episode-list-meta">
                <li class="progression-episode-season-meta-title">Season 1</li>
                <li class="progression-episode-list-meta-release-date">October 23, 2018</li>
              </ul>

              <div class="progression-episode-list-short-description">Add-in a short description about each
                episode
                here. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown
                printer.</div>
            </div>
            <!-- close .progression-episode-list-right-margin -->
          </div>
          <!-- close  .progression-studios-episode-right-container -->

          <div class=".clearfix"></div>
        </div>
        <!-- close .progression-episode-list-flex -->
      </li>
    </template>
  </ul>
  <div class=".clearfix"></div>
</div><!-- close .vayvo-progression-video-season-container -->

<script>
  const params = window.location.pathname.split('/');
  const key = 'e09edc4f5402b9fa7f4a5a76a7edf348';
  const container = document.querySelector('.progression-studios-episode-list-main');
  const template = document.querySelector('#episodio').content;
  const fragment = document.createDocumentFragment();
  let imgSrc;

  function getDataFromApi(selected, replace) {
    fetch('https://api.themoviedb.org/3/tv/' +
      params[3] +
      '/season/' +
      selected +
      '?api_key=' + key +
      '&language=es'
    )
    .then(res => res.json())
    .then(data => {
      data.episodes.forEach((e) => {
        if(e.still_path) imgSrc = 'https://image.tmdb.org/t/p/w500' + e.still_path; else imgSrc = "{{ asset('images/not_found.svg') }}";
        const img = template.querySelector('#episodio-img'); img.src = imgSrc; img.style.maxHeight = '231px';
        template.querySelector('.progression-episode-list-title').textContent = e.name;
        template.querySelector('.progression-episode-season-meta-title').textContent = e.season_number;
        template.querySelector('.progression-episode-list-meta-release-date').textContent = e.air_date;
        template.querySelector('.progression-episode-list-short-description').textContent = e.overview;
        let clone = document.importNode(template, true);
        fragment.appendChild(clone);
      });
      container.appendChild(fragment);
    });
  }
  getDataFromApi(1);

  document.querySelector('.vayvo-progression-video-season-navigation').addEventListener('click', (e) => {
    if (e.target.dataset.seasonId) {
      document.querySelectorAll('.progression-video-season-title').forEach(e => e.classList.remove('current'));
      e.target.parentElement.classList.add('current');
      selected = e.target.dataset.seasonId;
      container.innerHTML = '';
      getDataFromApi(selected);
    }
  });

  document.querySelector('.wishlist-button-pro').addEventListener('click', () => {
    const fav = document.querySelector('#favorito');
    if(fav.classList.contains('fa-plus-circle')) {
      fav.classList.replace('fa-plus-circle', 'fa-bookmark')
    } else {
      fav.classList.replace('fa-bookmark', 'fa-plus-circle')
    }
  });
</script>