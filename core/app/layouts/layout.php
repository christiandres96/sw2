<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--Cabeceras para estilos-->
    <title> Soluciones Tecnológicas </title>
    <link href="res/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="res/font-awesome/css/font-awesome.min.css">
    <script src="res/js/jquery.min.js"></script>
    <script src="res/plugins/morris/raphael-min.js"></script>
    <script src="res/plugins/morris/morris.js"></script>
    <link rel="stylesheet" href="res/plugins/morris/morris.css">
    <link rel="stylesheet" href="res/plugins/morris/example.css">
  </head>

  <body>
    <!--Barra de navegación-->
<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header"> <!--Boton para realizar acciones con la barra de navegacion-->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./">Soluciones Tecnologicas</a>
    </div>
    <!--Colapsar barra de navegacion-->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="./">Inicio</a></li>
        <li><a href="./?view=reports">Reporte</a></li>
      </ul>
    </div>
  </div>
</nav>

<!--Código PHP para cargar la vista adecuada-->
<?php
  View::load("index");
?>
<!--Contenedor-->
<div class="container">
<div class="row">
<div class="col-md-12">
<hr>
<p class="text-center">Desarrolladores &copy; 2018</p>
</div>
</div>
</div>
<script src="res/bootstrap/js/bootstrap.min.js"></script>


  </body>
</html>
