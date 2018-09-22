@extends('template')

@section('contenido')


<!--======= HOME MAIN SLIDER =========-->
  <section class="home-slider">
    <div class="tp-banner-container">
      <div class="tp-banner-fix" >
        <ul>

          <!-- Slider 3 -->
          <li data-transition="random" data-slotamount="7"> <img src="images/slides/slide-6.jpg" data-bgposition="center center" alt="" />
            <!-- SLIDER LAYERS -->
            <div class="tp-caption lfr tp-resizeme rs-parallaxlevel-4"
                  data-x="right"
                  data-y="top"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-speed="700"
                  data-start="1000"
                  data-easing="Back.easeOut"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"
                  style="z-index: 1;"> <img src="images/slides/slide-6-1.png" alt=""> </div>

            <!-- Layer -->
            <div class="tp-caption font-montserrat sft tp-resizeme rs-parallaxlevel-4"
                  data-x="left"
                  data-y="center" data-voffset="-140"
                  data-speed="700"
                  data-start="1000"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-easing="Back.easeOut"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"
                  style="color: #13a89e; font-size: 30px; font-weight: lighter; letter-spacing: 0px;"> Chipilo 718 <br>

              Puebla </div>

            <!-- Layer -->
            <div class="tp-caption font-montserrat lfr tp-resizeme rs-parallaxlevel-4"
                  data-x="250"
                  data-y="center" data-voffset="-220"
                  data-speed="700"
                  data-start="1400"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-easing="Back.easeOut"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"> <span class="off-tag">Preventa</span> </div>

            <!-- Layer -->
            <div class="tp-caption sfb tp-resizeme  font-playfair text-center rs-parallaxlevel-4"
                  data-x="left"
                  data-y="center" data-voffset="-70"
                  data-speed="700"
                  data-start="1700"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-easing="Back.easeOut"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"
                  style="color: #13a89e; font-size: 20px; font-weight: 200; font-style:italic; letter-spacing:0px;"> 14 Departamentos DUPLEX</div>

            <!-- Layer -->
            <div class="tp-caption sfb tp-resizeme rs-parallaxlevel-4"
                  data-x="left"
                  data-y="center" data-voffset="0"
                  data-speed="700"
                  data-start="2400"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-easing="Back.easeOut"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"
                  style="z-index: 10;"> <a href="chipilo.html" class="btn btn-1">Detalles</a> </div>
          </li>




          <!-- Slider 1 -->
          <li data-transition="fade" data-slotamount="7"> <img src="images/slides/slide-4.jpg" data-bgposition="center top" alt="" />
            <div class="overlay"></div>
            <!-- Layer -->
            <div class="tp-caption sft font-montserrat tp-resizeme rs-parallaxlevel-4"
                  data-x="center"
                  data-y="center" data-voffset="-30"
                  data-speed="700"
                  data-start="1000"
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"
                  style="color: #fff; font-size: 48px; font-weight: bold; ">Desarrollo en Venta</div>

            <!-- Layer -->
            <div class="tp-caption sfb  font-playfair text-center tp-resizeme rs-parallaxlevel-4"
                  data-x="center"
                  data-y="center" data-voffset="20"
                  data-speed="1000"
                  data-start="1700"
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"
                  style="color: #fff; font-size: 18px; font-style:italic;"> Superficie desde : 91m2 a 1115m2 </div>

            <!-- Layer -->
            <div class="tp-caption sfb tp-resizeme rs-parallaxlevel-4"
                  data-x="center"
                  data-y="center" data-voffset="100"
                  data-speed="1000"
                  data-start="2400"
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"><a href="chipilo.html" class="btn btn-1">Detalles</a> </div>
          </li>
          </li>

        </ul>
      </div>
    </div>
  </section>

<!-- CONTENT START -->
  <div class="content">
    <section class="section-p-60px services welcome no-padding-b">
      <div class="container">
        <!--  Tittle -->
        <div class="tittle  animate fadeInUp" data-wow-delay="0.4s">
          <h5>ALGUNOS DESARROLLOS CONSTRUIDOS</h5>
          <hr>
          <p>Estos 18 años de gran dinamismo, nos han permitido desarrollar conocimiento y acumular experiencia para fortalecer nuestros valores. Es por eso que a partir de 2000, inicia la promoción de desarrollos de vivienda conscientes de las oportunidades que presenta el sector inmobiliario.</p>
        </div>

       </div>
     </section>
  </div>





  <!-- Item Banner -->
  <section class="bnr-items">
    <div class="bnr-items-slider">







      <!--  Items 1  -->


      <div class="items-pro">
        <!-- Image -->
        <img src="images/bnr-img-chipilo.jpg" alt="">
        <!-- Hover Details -->
        <div class="item-hover">
          <div class="row"> <span>PREVENTA</span> </div>
          <a href="#." class="head"> CHIPILO 718, PUEBLA </a>
          <p>Edificio de 14 departamentos en condominio 2 Recámaras, 2 Baños, 2 Estacionamientos, Acabados de Lujo</p>
          <a href="chipilo.html" class="btn btn-1">DETALLES</a> </div>
      </div>







      <!--  Items 2  -->


      <div class="items-pro">
        <!-- Image -->
        <img src="images/bnr-img-cbz.jpg" alt="">
        <!-- Hover Details -->
        <div class="item-hover">
          <div class="row"> <span>VENDIDO 2015</span> </div>
          <a href="#." class="head">CARLOS B ZETINA</a>
          <p>Edificio de 8 Departamentos en 4 niveles de 81m2 a 89m2, 2 Recámaras, 2.5 Baños, 2 estacionamientos, Acabados de Lujo</p>
          <a href="cbzetina.html" class="btn btn-1">DETALLES</a> </div>
      </div>








      <!--  Items 3  -->


      <div class="items-pro">
        <!-- Image -->
        <img src="images/bnr-img-mazatlan.jpg" alt="">
        <!-- Hover Details -->
        <div class="item-hover">
          <div class="row"> <span>VENDIDO 2011</span> </div>
          <a href="#." class="head"> MAZATLAN </a>
          <p>Exclusivos 2 departamentos de lujo, superficie de 144m2 y 132 m2 + 107m2 de Roof Garden, 2 Habitaciones, 3.5 Baños, 2 Estacionamientos</p>
          <a href="mazatlan.html" class="btn btn-1">DETALLES</a> </div>
      </div>







      <!--  Items 4  -->


      <div class="items-pro">
        <!-- Image -->
        <img src="images/bnr-img-yautepec.jpg" alt="">
        <!-- Hover Details -->
        <div class="item-hover">
          <div class="row"> <span>VENDIDO 2012</span> </div>
          <a href="#." class="head"> YAUTEPEC </a>
          <p>Exclusivos 3 departamentos de lujo de 81m2 a 122m2, 2 habitaciones, 2.5 baños, 1 y 2 Estacionamientos, Jardin o Roof Garden privado</p>
          <a href="yautepec.html" class="btn btn-1">DETALLES</a> </div>
      </div>







      <!--  Items 5  -->


      <div class="items-pro">
        <!-- Image -->
        <img src="images/bnr-img-cozumel.jpg" alt="">
        <!-- Hover Details -->
        <div class="item-hover">
          <div class="row"> <span>VENDIDO 2012</span> </div>
          <a href="#." class="head"> COZUMEL </a>
          <p>Edificio de 8 deptos duplex de 74m2 a 92m2,2 Habitaciones, 2 Baños, 2 Estacionamientos </p>
          <a href="cozumel.html" class="btn btn-1">DETALLES</a> </div>
      </div>






      <!--  Items 6  -->


      <div class="items-pro">
        <!-- Image -->
        <img src="images/bnr-img-SanMiguel.jpg" alt="">
        <!-- Hover Details -->
        <div class="item-hover">
          <div class="row"> <span>CONSTRUIDO 2002 - 2003</span> </div>
          <a href="#." class="head"> CENTRO SAN MIGUEL </a>
          <p>Centro Comercial en Cuautitlán Izcalli</p>
          <a href="sanmiguel.html" class="btn btn-1">DETALLES</a> </div>
      </div>





        <!--  Items 7  -->


      <div class="items-pro">
        <!-- Image -->
        <img src="images/bnr-img-OficinasCorporativas.jpg" alt="">
        <!-- Hover Details -->
        <div class="item-hover">
          <div class="row"> <span>CONSTRUIDO 2005</span> </div>
          <a href="#." class="head"> OFICINAS CORPORATIVAS </a>
          <p>     </p>
          <a href="oficinassantafe.html" class="btn btn-1">DETALLES</a> </div>
      </div>





        <!--  Items 8  -->


      <div class="items-pro">
        <!-- Image -->
        <img src="images/bnr-img-FraccAtizapan.jpg" alt="">
        <!-- Hover Details -->
        <div class="item-hover">
          <div class="row"> <span>ADECUACIÓN 2006</span> </div>
          <a href="#." class="head">FRACC. ATIZAPÁN </a>
          <p>Adecuación de proyecto Original</p>
          <a href="atizapan.html" class="btn btn-1">DETALLES</a> </div>
      </div>





        <!--  Items 9  -->


      <div class="items-pro">
        <!-- Image -->
        <img src="images/bnr-img-CarWashLeon.jpg" alt="">
        <!-- Hover Details -->
        <div class="item-hover">
          <div class="row"> <span>CONSTRUIDO 2006</span> </div>
          <a href="#." class="head"> Car Wash León </a>
          <p>Centro de lavado de autos en leon </p>
          <a href="carwashleon.html" class="btn btn-1">DETALLES</a> </div>
      </div>





            <!--  Items 10  -->


      <div class="items-pro">
        <!-- Image -->
        <img src="images/bnr-img-CarWashMazatlan.jpg" alt="">
        <!-- Hover Details -->
        <div class="item-hover">
          <div class="row"> <span>CONSTRUIDO 2007</span> </div>
          <a href="#." class="head"> Car Wash Mazatlan </a>
          <p>Centro de lavado de autos en Mazatlan</p>
          <a href="carwashmazatlan.html" class="btn btn-1">DETALLES</a> </div>
      </div>





            <!--  Items 11  -->


      <div class="items-pro">
        <!-- Image -->
        <img src="images/bnr-img-autospa.jpg" alt="">
        <!-- Hover Details -->
        <div class="item-hover">
          <div class="row"> <span>CONSTRUIDO 2007</span> </div>
          <a href="#." class="head"> Auto Spa Coacalco </a>
          <p>Centro de lavado de autos en Coacalco </p>
          <a href="carwahscoacalco.html" class="btn btn-1">DETALLES</a> </div>
      </div>





                <!--  Items 12  -->


      <div class="items-pro">
        <!-- Image -->
        <img src="images/bnr-img-Panaca.jpg" alt="">
        <!-- Hover Details -->
        <div class="item-hover">
          <div class="row"> <span>CONCEPTUALIZACIÓN 2007</span> </div>
          <a href="#." class="head">PANACA</a>
          <p>Estación Equina Elementos Verticale. Ritmo materiales naturales sombras en  muros sol y sombra en pisos horizontalidad.
</p>
          <a href="panaca.html" class="btn btn-1">DETALLES</a> </div>
      </div>







                <!--  Items 12  -->


      <div class="items-pro">
        <!-- Image -->
        <img src="images/bnr-img-zendere.jpg" alt="">
        <!-- Hover Details -->
        <div class="item-hover">
          <div class="row"> <span>CONSTRUIDO 2008</span> </div>
          <a href="#." class="head"> ZENDERE / LOS CABOS</a>
          <p>    </p>
          <a href="zendere.html" class="btn btn-1">DETALLES</a> </div>
      </div>






                <!--  Items 12  -->


      <div class="items-pro">
        <!-- Image -->
        <img src="images/bnr-img-zenteno.jpg" alt="">
        <!-- Hover Details -->
        <div class="item-hover">
          <div class="row"> <span>CONSTRUIDO 2008</span> </div>
          <a href="#." class="head"> TERRAZA ZENTENO</a>
          <p>      </p>
          <a href="#." class="btn btn-1">DETALLES</a> </div>
      </div>

      <!--  Items 10  -->


      <div class="items-pro">
        <!-- Image -->
        <img src="images/bnr-img-sanluis.jpg" alt="">
        <!-- Hover Details -->
        <div class="item-hover">
          <div class="row"> <span>VENDIDO 2009</span> </div>
          <a href="#." class="head"> SAN LUIS POTOSI </a>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
          <a href="sanluis.html" class="btn btn-1">DETALLES</a> </div>
      </div>
    </div>
  </section>

  <!-- CONTENT START -->
  <div class="content">
    <section class="section-p-60px services welcome no-padding-b">
      <div class="container">
        <!--  Tittle -->
        <div class="tittle  animate fadeInUp" data-wow-delay="0.4s">
          <h5> Bienvenido a Inmobiliaria Zahorí </h5>
          <hr>
          <p>Inmobiliara Zahorí y Capdevila Arquitectos, cuentan con más de 18 años de experiencia en la industria del diseño y la construcción, proporciona servicios integrales de arquitectura a clientes privados con necesidades específicas para sus espacios.</p>

<p>Diseña, proyecta y construye responsablemente proyectos inmobiliarios que sean prácticos, originales e innovadores con criterios de eficiencia y respeto al medio ambiente que satisfagan las necesidades de empresas, clientes y usuarios.</p>
        </div>

          </li>
        </ul>
      </div>
    </section>


@endsection

