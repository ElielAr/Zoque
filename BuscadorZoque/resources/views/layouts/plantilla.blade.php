<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="iconos/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/estilos_repro.css">

 

    <link rel="stylesheet" type="text/css" href="{{ url('css/estilos.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/fontello.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/menu_gral.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/foother.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/estilos_repro.css') }}">




    <script defer src="iconos/js/all.js"></script> 

    <title> Document</title>
</head>
<body>

    <!--Empieza Encabezado de la pagina-->
    <header>
        <div class="contenedor">
            <h1 class="icon-laptop"> Tonapac - Buscador Zoque </h1>
            <input type="checkbox" id="menu-bar">
            <label class="icon-book" for="menu-bar">    </label>
            <nav class="menu">
                <a href=""> Inicio   </a>
                <a href=""> Blog   </a>
                <a href=""> Contacto   </a>
                <a href=""> Acerda De...  </a>
            </nav>
        </div>
    </header>    
    <!--Termina Encabezado de la pagina-->


   <!--Contenido-->
   @yield('contenido')

   
     
     

    <!--  Inicia Footer   -->
     <footer class="footer">
        <div class="l-footer">
        <h1>
        <img src="https://i.postimg.cc/y62wcLBq/logo.png" alt=""></h1>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam atque recusandae in sit sunt molestiae aliquid fugit. Mollitia eaque tempore iure sit nobis? Vitae nemo, optio maiores numquam quis recusandae.</p>
        </div>
        <ul class="r-footer">
        <li>
          <h2>
        Social</h2>
        <ul class="box">
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Pinterest</a></li>
        <li><a href="#">Dribbble</a></li>
        </ul>
        </li>
        <li class="features">
          <h2>
        Information</h2>
        <ul class="box h-box">
        <li><a href="#">Blog</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Sales</a></li>
        <li><a href="#">Tickets</a></li>
        <li><a href="#">Certifications</a></li>
        <li><a href="#">Customer Service</a></li>
        </ul>
        </li>
        <li>
          <h2>
        Legal</h2>
        <ul class="box">
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Use</a></li>
        <li><a href="#">Contract</a></li>
        </ul>
        </li>
        </ul>
        <div class="b-footer">
        <p>
        All rights reserved by ©CompanyName 2020 </p>
        </div>
        </footer>
    <!-- Termina Footer -->

  
</body>
</html>

    
    
