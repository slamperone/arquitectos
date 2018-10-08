<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Departamentos Puebla | Inmobiliaria Zahori | Puebla | CDMX | Departamentos</title>
<meta name="keywords" content="Departamentos,Casas,deptos puebla,Deptos centro Puebla,Inmobiliaria Zahori,Capdevila Arquitectos,Departamentos Chipilo">
<meta name="description" content="Inmobiliaria Zahori, Puebla, CDMX, Departamento">
<meta name="author" content="Zahori">

<!-- FONTS ONLINE -->

<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>



<!--MAIN STYLE-->
<?php
$estilos = array(
"bootstrap.min.css",
"main.css",
"style.css",
"responsive.css",
"animate.css",
"font-awesome.min.css",
"custom.css");
?>

@foreach ($estilos as $estilo)
<link href="{{ asset('css/'.$estilo) }}"" rel="stylesheet" type="text/css">
@endforeach


<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->


<link rel="stylesheet" type="text/css" href="{{ asset('rs-plugin/css/settings.css')}}" media="screen" />



<!-- JavaScripts -->


<script src="{{ asset('js/modernizr.js')}}"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>




<body>


<!-- LOADER ===========================================-->


<div id="loader">
  <div class="loader">
    <div class="position-center-center"> <img src="{{ asset('images/logo-dark.png')}}" alt="">

      <p class="font-playfair text-center">Cargando...</p>
      <div class="loading">
        <div class="ball"></div>
        <div class="ball"></div>
        <div class="ball"></div>
      </div>
    </div>
  </div>
</div>

<!-- Page Wrap -->


<div id="wrap">

  <!-- Header -->

 <!-- Header -->


  <header class="header-style-2">

    <!-- Top Bar -->
    <div class="top-bar">
      <div class="container">
        <!-- Language -->
        <!--<div class="language"> <a href="#." class="active">EN</a> <a href="#.">FR</a> <a href="#.">GE</a> </div>-->
        <div class="top-links">
          <ul>
            <li><a href="tel: 52908304">T. (55) 5290.8304</a></li>
            <li><a href="mailto:ventas@c-arquitectos.com.mx">ventas@c-arquitectos.com.mx</a></li>

          </ul>
          <!-- Social Icons -->
          <ul class="social_icons">
            <li class="facebook"><a href="#."><i class="fa fa-facebook"></i> </a></li>
            <li class="twitter"><a href="#."><i class="fa fa-twitter"></i> </a></li>
            <!--<li class="dribbble"><a href="#."><i class="fa fa-dribbble"></i> </a></li>
            <li class="googleplus"><a href="#."><i class="fa fa-google-plus"></i> </a></li>
            <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i> </a></li>-->
          </ul>
        </div>
      </div>
    </div>

    <!-- Top Bar -->




    <!-- Logo -->

    <div class="container">
      <div class="logo"> <a href="#."><img src="{{ asset('images/logo-dark.png')}}" alt=""></a> </div>
    </div>

      <!-- Nav -->

      <div class="sticky">
      <div class="container">

      <!-- Nav -->

        <nav class="webimenu">


          <!-- MENU BUTTON RESPONSIVE -->

          <div class="menu-toggle"> <i class="fa fa-bars"> </i> </div>
          <ul class="ownmenu">
          <li class="active"><a href="{{ url('') }}">INICIO</a>
          </li>
          <li class="active"><a href="{{ route('venta.index') }}">EN VENTA</a>
            <ul class="dropdown">
              <li><a href="chipilo.html">Chipilo 718</a></li>
              <li><a href="teziutlan.html">Teziutlán 34</a></li>

            </ul>
          </li>
          <li class="active"><a href="{{ route('construidos.index') }}">CONSTRUIDOS</a>
            <ul class="dropdown">

              <li><a href="oficinassantafe.html">Oficinas Santa Fe</a></li>
              <li><a href="atizapan.html">Fraccionamiento Atizapan</a></li>
              <li><a href="sanluis.html">San Luis Potosi</a></li>
              <li><a href="casarodriguez.html">Casa Rodríguez</a></li>
              <li><a href="lombardo.html">Terraza Lombardo</a></li>
              <li><a href="kahn.html">Terraza Kahn</a></li>
              <li><a href="mazatlan.html">Mazatlan 165</a></li>
              <li><a href="yautepec.html">Yautepec 134</a></li>
              <li><a href="cozumel.html">Cozumel 39</a></li>
              <li><a href="barrera.html">Juan de la Barrera</a></li>
              <li><a href="montes.html">Montes de Oca</a></li>
              <li><a href="cbzetina.html">Carlos B Zetina</a></li>
              <li><a href="casacastro.htm">Casa Castro</a></li>
            </ul>
          </li>




             <li class="active"><a href="{{ route('arquitectonicos.index') }}">ARQUITECTONICOS</a>
            <ul class="dropdown">
              <li><a href="sanmiguel.html">Centro San Miguel</a></li>
              <li><a href="pharmacy.html">Pharmacy</a></li>
              <li><a href="zendere.html">Zendere los Cabos</a></li>
              <li><a href="rodriguez.html">Rodríguez Malinalco</a></li>
              <li><a href="lourdes.html">Lourdes Malinalco</a></li>
            </ul>
          </li>
          <li><a href="{{ url('contacto') }}">CONTACTO</a>
          </li>
       </ul>
        </nav>
      </div>
    </div>
  </header>
  <!-- Header End -->
<!--
Echame tu contenido carnal
-->
@yield('contenido')

  <!--======= Footer =========-->
  <footer>
    <div class="container">
      <div class="text-center"> <a href="#."><img src="images/logo.png" alt=""></a><br>

        <p class="intro-small margin-t-40">Aportamos valor mediante soluciones arquitectónicas que respondan a los requerimientos y preferencias de nuestros clientes, maximicen el valor de su inversión, con calidad en el trabajo y en los materiales utilizados.</p>
      </div>



      <!-- Rights -->
      <div class="rights">
        <p>|  www.c-arquitectos.com.mx  |  {{ now()->year }}  | </p>
      </div>
    </div>
  </footer>
  <!-- GO TO TOP -->
    <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a>
  <!-- GO TO TOP End -->
</div>
<!-- Wrap End -->
<?php
$escripts = array(
"jquery-1.11.3.js",
"wow.min.js",
"bootstrap.min.js",
"own-menu.js",
"owl.carousel.min.js",
"jquery.magnific-popup.min.js",
"jquery.flexslider-min.js",
"jquery.isotope.min.js",
"main.js"
);
?>

@foreach ($escripts as $escript)
<script src="{{ asset('js/'.$escript) }}"></script>
@endforeach

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="{{ asset('rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>



</body>
</html>