@extends('layout.app')
@section('title', 'Suscripción')

@section('content')
  {{-- {{dd($data['results'][0])}} --}}
  <div id="page-title-pro">
    <div id="progression-studios-page-title-container">
      <div class="container">
        <div style="height:60px;"></div>
        <h1 class="page-title">Películas y series ilimitadas y mucho más.</h1>
        <h4 class="progression-sub-title">Inicia tu membresía para empezar a disfrutar contenido.</h4>
      </div><!-- close .container -->
    </div><!-- close #progression-studios-page-title-container -->
    <div class="clearfix"></div>
    {{-- http://via.placeholder.com/1600x600 --}}
    <div id="page-title-overlay-image" style="background-image:url({{ $apibase }}/original/{{$data['results'][0]['backdrop_path']}});"></div>
  </div>


  <div id="content-pro">

    <div id="membership-plan-background">
      <div class="membership-width-container">
        <div class="container">


          <div class="row d-flex justify-content-center">

            <div class="col col-12 col-md-4 col-lg-4">
              <div class="pricing-plan-container selected">
                <i class="fas fa-check"></i>
                <h3>Membresía Redmex</h3>
                <h4>$249<span>/mes</span></h4>
                <ul>
                  <li>Sin anuncios</li>
                  <li>Disfruta desde tu navegador o móvil</li>
                  <li>El mayor catalogo del mundo</li>
                  <li>Prueba gratuita de 30 días</li>
                </ul>

              </div><!-- close .pricing-plan-container -->
            </div><!-- close .col -->

          </div><!-- close .pricing-plan-container -->
        </div><!-- close .col -->



      </div><!-- close .row -->

      <div class="button-plan-selected"><a href="#!" class="btn" data-dismiss="modal" aria-label="Close"
          data-toggle="modal" data-target="#SignoutModal">Contratar</a></div>


      <div class="clearfix"></div>
    </div><!-- close .container -->
  </div><!-- close .membership-width-container -->
  </div><!-- close #membership-plan-background -->




  <a href="#0" id="pro-scroll-top"><i class="fas fa-chevron-up"></i></a>


  <!-- Login Modal -->
  <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModal" aria-hidden="true">
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
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Correo">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Contraseña">
              </div>
              <div class="container-fluid">
                <div class="row no-gutters">

                  <div class="col forgot-your-password"><a href="#!">¿Olvidaste tu contraseña?</a></div>
                </div>
              </div><!-- close .container-fluid -->
              <div class="form-group aligncenter">
                <button type="submit" class="btn">Iniciar sesión</button>
              </div>

              <div class="aligncenter"><button class="btn" data-dismiss="modal" aria-label="Close"
                  data-toggle="modal" data-target="#SignoutModal">¿No tienes una
                  cuenta? <span>Regístrate</span></button></div>



            </form>

          </div><!-- close .registration-login-container -->

        </div><!-- close .modal-body -->

      </div><!-- close .modal-content -->
    </div><!-- close .modal-dialog -->
  </div><!-- close .modal -->

  {{-- Signout Modal --}}
  <div class="modal fade" id="SignoutModal" tabindex="-1" role="dialog" aria-labelledby="SignoutModal"
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
            <form method="POST" action="{{ route('signup') }}">
              @csrf
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Nombre" required>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Correo" required>
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
              </div>
              <div class="form-group">
                <input type="password" name="password_confirmation" class="form-control" id="password"
                  placeholder="Confirmar contraseña" required>
              </div>
              <div class="form-group aligncenter">
                <button type="submit" class="btn">Completar registro</button></button>
              </div>

            </form>

          </div><!-- close .registration-login-container -->

        </div><!-- close .modal-body -->

      </div><!-- close .modal-content -->
    </div><!-- close .modal-dialog -->
  </div><!-- close .modal -->
@endsection
