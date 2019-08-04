<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Univ - @yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/Otros.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
        <nav class="navbar navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Cloud</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/Home') }}">Inicio <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/Estudiantes') }}">Mantenimiento</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Administracion</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/Autenticacion') }}">Cerrar sesion</a>
                  </li>
                </ul>
              </div>
            </nav>
    @yield('content')
    <script src="{{URL::asset('js/jquery-3.14.js')}}"></script>
    <script src="{{URL::asset('js/main.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/Otros.js')}}"></script>

</body>
</html>