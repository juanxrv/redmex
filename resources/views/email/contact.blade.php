<!doctype html>
<html lang="es">

<head>
  <title>Soporte</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
    html,
    body {
      height: 100%;
      background: rgb(223, 223, 223);
    }

    .container {
      width: 80%;
      height: 100vh;
      max-width: 960px;
      margin: auto;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 25px;
    }

    .card {
      width: 80%;
      min-width: 480px;
      border: 1px solid rgb(190, 190, 190);
      background: #FFF;
      box-shadow: 0 0 50px -40px #000;
      border-radius: 25px;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 10px 10px 0 10px;
    }

    .card-title {
      font-weight: bolder;
      margin: 5px 0;
    }

    .card-footer {
      border-top: solid 1px rgb(209, 209, 209);
      color: rgb(136, 136, 136);
      width: 100%;
      height: 40px;
    }

    .card-footer .card-text {
      height: 100%;
      width: 100%;
      display: inline-flex;
      align-items: center;
      gap: 4px;
    }

  </style>
</head>

<body>
  <div class="container">
    <div class="card">
      <img class="card-img-top" style="width: 50%" src="{{ asset('images/about2.png') }}">
      <div class="card-body">
        <h4 class="card-title">{{ $content['subject'] }}</h4>
        <p class="card-text">
          {{ $content['message'] }}
        </p>
      </div>
      <div class="card-footer">
        <p class="card-text">Mensaje recibido de <strong>{{ $name }}</strong> |
          <a href="mailto:{{ $email }}">{{ $email }}</a>
        </p>
      </div>
    </div>
  </div>
</body>

</html>
