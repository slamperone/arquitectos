@extends('template')

@section('contenido')

<div class="content">

    <!--======= SUB BANNER =========-->
    <section class="sub-banner animate fadeIn" data-wow-delay="0.4s">
      <div class="container">
        <h4>DESARROLLOS EN PREVENTA</h4>
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="{{ url('') }}">Inicio</a></li>
          <li class="active">En Venta</li>
        </ol>
      </div>
    </section>
<pre>
<?php
#var_dump($ventas);
?>
</pre>

<!--======= Products =========-->
            <div class="popurlar_product animate fadeInUp" data-wow-delay="0.4s">
            <ul class="row">
              @foreach ($ventas as $venta)

                <!-- New Products -->
                <li class="col-sm-6 animate fadeIn" data-wow-delay="0.4s">
                  <div class="items-in">
                    <!-- Image -->
                    <img src="storage/{{ $venta->fotoListado }}" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">

                        <li class="full-w"> <a href="{{ route('venta.show', [$venta->slug]) }}" class="btn">DETALLES</a></li>
                        <!-- Rating Stars -->
                        <li class="stars">
                          @for ($i = 0; $i <= $venta->estrellas; $i++)
                                <i class="fa fa-star"></i>
                          @endfor


                        </li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="{{ route('venta.show', [$venta->slug]) }}">{{ $venta->nombreCorto }}</a> <span class="font-montserrat">{{ $venta->precio }}</span> </div>
                  </div>
                </li>


              @endforeach
            </ul>
            </div>

            <!--ul class="pagination animate fadeInUp" data-wow-delay="0.4s">
              <li><a href="#.">1</a></li>
              <li><a href="#.">2</a></li>
              <li><a href="#.">3</a></li>
              <li><a href="#.">4</a></li>
              <li><a href="#.">5</a></li>
              <li><a href="#."><i class="fa fa-angle-right"></i></a></li>
            </ul-->
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection

