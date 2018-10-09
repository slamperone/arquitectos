@extends('template')

@section('contenido')

<div class="content">

    <!--======= SUB BANNER =========-->
    <section class="sub-banner animate fadeIn" data-wow-delay="0.4s">
      <div class="container">
        <h4>PROYECTOS CONSTRUIDOS</h4>
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="{{ url('') }}">Inicio</a></li>
          <li class="active">PROYECTOS CONSTRUIDOS</li>
        </ol>
      </div>
    </section>
<pre>
<?php
#var_dump($ventas);
?>
</pre>

<!--======= PROYECTOS CONSTRUIDOS =========-->



            <div class="popurlar_product animate fadeInUp" data-wow-delay="0.4s">
              <ul class="row">
                <!-- PROYECTOS CONSTRUIDOS / CENTRO SAN MIGUEL -->

@foreach ($cons as $prop)
                <li class="col-sm-4 animate fadeIn" data-wow-delay="0.4s">
                  <div class="items-in">
                  <!--  Tags  -->
                    <div class="off-tag"> {{$prop->ano}} </div>
                    <!-- Image -->
                    <img src="storage/{{$prop->principal}}" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">
                        <li class="full-w"> <a href="{{ route('construidos.show', [$prop->slug]) }}" class="btn">Más imágenes</a></li>

                        <!-- Rating Stars -->
                        <li class="stars">

                          @for ($i = 1; $i <= $prop->extrellas; $i++)
                                <i class="fa fa-star"></i>
                          @endfor

                        </li>
                      </ul>
@endforeach
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="{{ route('construidos.show', [$prop->slug]) }}">{{$prop->nombre}}</a> </div>
                  </div>
                </li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>

@endsection

