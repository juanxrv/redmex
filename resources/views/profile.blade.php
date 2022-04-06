@extends('layout.app')
@section('title', auth()->user()->name)

@section('content')
  <div id="content-pro">

    <div class="container custom-gutters-pro">

      <div id="vayvo-progression-author-sidebar">
        <div id="content-sidebar-info">
          {{-- <div id="avatar-sidebar-large-profile" style="background-image:url('http://via.placeholder.com/400x500')">
          </div> --}}
          <div class="avatar large-avatar">{{ Str::upper(substr(auth()->user()->name, 0, 1)) }}</div>
          <div id="profile-sidebar-gradient"></div>
          <a href="#!" class="edit-profile-sidebar" data-dismiss="modal" aria-label="Close" data-toggle="modal"
            data-target="#UpdateModal">Editar perfil</a>
        </div><!-- close .content-sidebar-info -->

        <div id="vayvo-profile-sidebar-name">
          <h5>{{ auth()->user()->name }}</h5>
          {{-- <h6>United States</h6> --}}
          {{-- <ul class="profile-social-media-sidebar-icons">
            <li><a target="_blank" href="http://facebook.com/progressionstudios/"><i class="fab fa-facebook"></i></a>
            </li>
            <li><a target="_blank" href="http://twitter.com/progression_s"><i class="fab fa-twitter"></i></a></li>
            <li><a target="_blank" href="#!"><i class="fab fa-linkedin"></i></a></li>
            <li><a target="_blank" href="#!"><i class="fab fa-instagram"></i></a></li>
            <li><a target="_blank" href="#!"><i class="fab fa-youtube"></i></a></li>
          </ul> --}}
        </div><!-- close #vayvo-profile-sidebar-name -->

        <div class="content-sidebar-section">
          {{-- <h3 class="content-sidebar-sub-header">User Stats</h3> --}}
          <ul id="profile-watched-stats">
            <li>
              <span class="mediaNumber">0</span>
              Favoritos
            </li>
          </ul>
        </div>
        <!-- close .content-sidebar-section -->

        <div class="content-sidebar-section">
          <h3 class="content-sidebar-sub-header">Miembro desde</h3>
          <div class="content-sidebar-simple-text">
            {{ auth()->user()->created_at->diffForHumans() }}</div>
        </div>
        <!-- close .content-sidebar-section -->

      </div><!-- close #vayvo-progression-author-content-sidebar -->

      <div id="vayvo-progression-author-content-container">
        <ul id="dashboard-sub-menu">
          <li data-type="favs" class="current"><a href="#!">Favoritos</a></li>
          <li data-type="history"><a href="#!">Historial</a></li>
        </ul>
        <!-- close #dashboard-sub-menu -->

        <div id="container" class="row">

          <template id="histfav">
            <div class="col col-12 col-md-6 col-lg-6 smooth-anim">
              <div class="progression-studios-video-index-container">
                <a class="watchlink" href="#">
                  <div class="progression-studios-video-feaured-image">
                    <img class="backdrop" src="#" alt="Featured Image">
                  </div>

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
                          <li class="genre">Drama</li>
                        </ul>
                        <div class="clearfix"></div>

                      </div><!-- close .progression-video-index-vertical-align -->
                    </div><!-- close .progression-video-index-table -->
                  </div><!-- close .progression-video-index-content -->
                  <div class="video-index-border-hover"></div>

                </a>
              </div><!-- close .progression-studios-video-index-container -->
            </div><!-- close .col -->
          </template>

        </div><!-- close .row -->

      </div><!-- close #vayvo-progression-author-content-container -->

      <div class="clearfix"></div>
    </div><!-- close .container -->

  </div><!-- close #content-pro -->

  <div class="modal fade" id="UpdateModal" tabindex="-1" role="dialog" aria-labelledby="SignoutModal"
    aria-hidden="true">
    <button type="button" class="close float-close-pro noselect" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header-pro">
          <h2>Ingresa tus datos</h2>
        </div>
        <div class="modal-body-pro social-login-modal-body-pro">

          <div class="registration-login-container">
            <form method="POST" action="{{ route('updateProfile') }}" autocomplete="off">
              @csrf @method('PUT')
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Nuevo nombre"
                  value="{{ auth()->user()->name }}" required>
              </div>
              <div class="form-group">
                <div class="mb-3">
                  <select class="form-control text-white" name="avatar" style="background: #161424">
                    <option value="" selected disabled>Avatar</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Nuevo correo">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Nueva contraseña">
              </div>
              <div class="form-group">
                <input type="password" name="password_confirmation" class="form-control" id="password"
                  placeholder="Confirmar contraseña">
              </div>
              <div class="form-group aligncenter">
                <button type="submit" class="btn">Guardar cambios</button></button>
              </div>

            </form>

          </div><!-- close .registration-login-container -->

        </div><!-- close .modal-body -->

      </div><!-- close .modal-content -->
    </div><!-- close .modal-dialog -->
  </div><!-- close .modal -->

  <script>
    const template = document.querySelector('#histfav').content;
    const container = document.querySelector('#container');
    const fragment = document.createDocumentFragment();
    const headers = {
      'Authorization': `Bearer {{ session('token') }}`
    };
    document.querySelector('#dashboard-sub-menu').addEventListener('click', (e) => {
      const target = e.target.parentElement;
      const targetClass = target.classList;
      const targetData = target.dataset;
      container.innerHTML = '';
      (targetData.type == 'favs') ? getData('/api/favs'): getData('/api/history');
      for (const f of target.parentElement.children) {
        f.classList.remove('current')
      }
      targetClass.add('current');
    });

    getData('/api/favs');

    async function getData(uri) {
      const data = await fetch(uri, {
        headers
      });
      const media = await data.json();

      let mediaNumber = document.querySelector('.mediaNumber');
      if (uri == '/api/favs') {
        mediaNumber.nextSibling.textContent = 'Favoritos';
        mediaNumber.textContent = media.data.length;
      } else {
        mediaNumber.nextSibling.textContent = 'Historial';
        mediaNumber.textContent = media.data.length;
      }
      media.data.forEach(e => {
        template.querySelector('.watchlink').href = `/watch/${e.media_type}/${e.media_id}`;
        template.querySelector('.backdrop').src = e.media_img;
        template.querySelector('.progression-video-title').textContent = e.media_name;
        template.querySelector('.average-rating-overflow-width').style.width = `${e.media_vote*10}%`;
        template.querySelector('.genre').textContent = e.media_genre;
        let clone = document.importNode(template, true);
        fragment.appendChild(clone);
      });
      container.appendChild(fragment);
    }
  </script>

  @if ($errors->any())
    <div class="status-msg error">
      <div class="d-flex flex-column">
        <h3 class="text-white-50 text-center m-2">:(</h3>
        @foreach ($errors->all() as $error)
          <p class="text-white mb-1 text-center">{{ $error }}</p>
        @endforeach
      </div>
    </div>
    <script>
      const status = document.querySelector('.status-msg');
      status.style.visibility = 'visible';
      status.style.opacity = '0.7';
      setTimeout(() => {
        status.style.visibility = 'hidden';
        status.style.opacity = '0';
      }, 5000);
    </script>
  @endif
@endsection
