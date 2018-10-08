@extends('template')

@section('contenido')

<div class="content">

    <!--======= SUB BANNER =========-->
    <section class="sub-banner animate fadeIn" data-wow-delay="0.4s">
      <div class="container">
        <h4>DESARROLLOS EN PREVENTA</h4>
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="#">Inicio</a></li>
          <li class="active">En Venta</li>
        </ol>
      </div>
    </section>



            <!--======= Products =========-->
            <div class="popurlar_product animate fadeInUp" data-wow-delay="0.4s">
              <ul class="row">

                <!-- New Products -->
                <li class="col-sm-6 animate fadeIn" data-wow-delay="0.4s">
                  <div class="items-in">
                    <!-- Image -->
                    <img src="images/enventa_chipilo718.jpg" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">

                        <li class="full-w"> <a href="chipilo.html" class="btn">DETALLES</a></li>
                        <!-- Rating Stars -->
                        <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="chipilo.html">RESIDENCIAL CHIPILO</a> <span class="font-montserrat">$ PROXIMAMENTE</span> </div>
                  </div>
                </li>

                <!-- New Products -->
                <li class="col-sm-6 animate fadeIn" data-wow-delay="0.6s">
                  <div class="items-in">
                    <!--  Tags  -->

                    <!-- Image -->
                    <img src="images/enventa_teziutlan.jpg" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">

                        <li class="full-w"> <a href="#." class="btn">PROXIMAMENTE</a></li>
                        <!-- Rating Stars -->
                        <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="#.">RESIDENCIAL TEZIUTLAN</a> <span class="font-montserrat">$ PROXIMAMENTE</span> </div>
                  </div>
                </li>


              </ul>
            </div>

            <!--======= PAGINATION =========-->
            <ul class="pagination animate fadeInUp" data-wow-delay="0.4s">
              <li><a href="#.">1</a></li>
              <!--<li><a href="#.">2</a></li>
              <li><a href="#.">3</a></li>
              <li><a href="#.">4</a></li>
              <li><a href="#.">5</a></li>-->
              <li><a href="#."><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection

