@extends('layout.app')
@section('title', 'Nosotros')

@section('content')
  <div id="page-title-pro" class="blog-post-title">
    <div id="progression-studios-page-title-container">
      <div class="container">
        <h1 class="page-title">Redmex</h1>

        <ul class="progression-single-post-meta">
          <li><i class="fas fa-info-circle"></i> Aquí puedes saber un poco más sobre nosotros y contactarnos.</li>
        </ul>

      </div><!-- close .container -->
    </div><!-- close #progression-studios-page-title-container -->
    <div class="clearfix"></div>
    <div id="page-title-overlay-image"
      style="background-image:url('{{ asset('images/about4.svg') }}'); background-position: center;"></div>
  </div>

  <div id="content-pro">
    <div class="container">
      <div class="row">
        <div class="col col-12">

          <div class="progression-studios-default-blog-index">
            <div class="progression-studios-feaured-image" style="overflow: hidden; opacity: 0.3; height: 350px">
              <img src="{{ asset('images/about1.png') }}" alt="Featured Image">
            </div><!-- close .progression-studios-feaured-image -->
            <!-- close featured thumbnail -->
            <div class="progression-blog-content">
              <h2 class="progression-blog-title text-center">¿Quiénes somos?</h2>
              <div class="progression-studios-blog-excerpt">
                <h4>Nuestra misión</h4>
                <p>
                  Ayudara la gente a transformar noches ordinarias en noches de película siendo una fuente
                  completa en películas, series y mas.
                </p>
              </div><!-- close .progression-studios-blog-excerpt -->
              <div class="progression-studios-blog-excerpt">
                <h4>Nuestra visión</h4>
                <p>
                  Ser la mejor opción en entretenimiento en el hogar, brindando servicio y valor de excelencia.
                </p>
              </div><!-- close .progression-studios-blog-excerpt -->
              <div class="progression-studios-blog-excerpt">
                <h4>Nuestros valores</h4>
                <p>
                  La empresa RedMex tiene como valor principal la calidad, por tal motivo se enfoca en brindar
                  un servicio y productos de calidad a sus clientes. Por otra parte, promueven varios valores
                  en la organización como son la puntualidad, respeto hacia los demás, lo cual significa valorar
                  las diferencias pero también buscan estos valores en la sociedad a traves de las diversas
                  campañas que realizan.
                </p>
              </div><!-- close .progression-studios-blog-excerpt -->
              <div class="progression-studios-blog-excerpt">
                <h4>Políticas de calidad</h4>
                <p>
                  Nos comprometemos a hacer accesible y brindar un servicio de entretenimiento altamente eficiente
                  y asumiremos la responsabilidad tanto del funcionamiento de la plataforma como el contenido que
                  esta tenga disponible.
                </p>
              </div><!-- close .progression-studios-blog-excerpt -->
              <ul class="progression-post-meta text-center">
                <button class="btn" data-dismiss="modal" aria-label="Close" data-toggle="modal"
                  data-target="#contact">Contacto</button>
              </ul>
              <div class="clearfix"></div>
            </div><!-- close .progression-blog-content -->
            <div class="clearfix"></div>
          </div><!-- close .progression-studios-default-blog-index -->

        </div><!-- close .col -->
      </div>
    </div>
  </div>

  <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contact" aria-hidden="true">
    <button type="button" class="close float-close-pro noselect" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header-pro">
          <h2>Contacto</h2>
        </div>
        <div class="modal-body-pro social-login-modal-body-pro">

          <div class="registration-login-container">
            <form method="POST" action="{{ route('contact') }}">
              @csrf
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Nombre" required>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Correo" required>
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Asunto" required>
              </div>
              <div class="form-group">
                <textarea class="w-100" style="resize: none" name="message" placeholder="Asunto" required></textarea>
              </div>
              <div class="form-group aligncenter">
                <button type="submit" class="btn">Enviar</button>
              </div>

            </form>

          </div><!-- close .registration-login-container -->

        </div><!-- close .modal-body -->

      </div><!-- close .modal-content -->
    </div><!-- close .modal-dialog -->
  </div><!-- close .modal -->
@endsection
