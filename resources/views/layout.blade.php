<html>
<head>
  <meta charset="utf-8">
  <title> @yield('title') </title>
  <meta name="description" content="registro alumno">
  <style>
    .active a{
        color: red;
        text-decoration: none;
    }

  </style>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('Home') }}">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href=" {{ route('create') }} ">Formulario</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button><a class="navbar-brand" href="{{ route('portafolio.index') }}">Registro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
           </ul>
     </div>
  </div>
</nav>



<body>

<nav>



@include('parciales/nav')

@yield('contenido')

</body>
</html>