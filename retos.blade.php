<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>FitK</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Fuentes -->
  <link href="css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Estilos -->
  <link href="css/freelancer.css" rel="stylesheet">

</head>

<body >
<div id="app">
  <!-- Navegacion -->
  <nav class="navbar navbar-expand-lg bg-secondary " id="mainNav">
    <div class="container">
      <img class="mx-auto" src="img/profile.png" alt="" width="25%">
    </div>
  </nav>



  <!-- Header -->
  @yield('contenido')
  <!-- Header -->



  </div>
  <!-- Footer -->
  
 <!--  <footer class="footer text-center">

  </footer> -->


  <!--JavaScript -->
  <script src="js/app.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>