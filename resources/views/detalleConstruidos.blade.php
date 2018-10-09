@extends('template')

@section('contenido')
   <!-- CONTENT START -->
  <div class="content">
    <!--======= SUB BANNER =========-->
    <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <h4>CENTRO SAN MIGUEL</h4>
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="{{ url('') }}">Inicio</a>
          </li><li><a href="{{ route('construidos.index') }}">Construidos</a></li>
          <li class="active">{{$prop->nombre}}</li>
        </ol>
      </div>
    </section>
<pre>
@php
var_dump($prop);
@endphp
</pre>

          <!--======= HOME MAIN SLIDER =========-->
  <section class="home-slider boxedcontainer">
    <div class="tp-banner-container">
      <div class="tp-banner-box" >
        <ul>
           @php $images = json_decode($prop->fotos); @endphp
                  @if($images)
                      @php $images = array_slice($images, 0); @endphp
                          @foreach($images as $image)

                          <li data-transition="random" data-slotamount="7"> 
                            <img src="@if( !filter_var($image, FILTER_VALIDATE_URL)){{
                              Voyager::image( $image ) }}@else{{ $image }}@endif" data-bgposition="center center" alt="" />
                          </li>
                          @endforeach
                  @endif
          </li>
        </ul>
      </div>
    </div>
  </section>



<section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <h6>Desliza la imagen para ver mas</h6>
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li>regresa a: <a href="{{ url('') }}">Inicio</a>
          </li><li><a href="{{ route('construidos.index') }}">Construidos</a></li>
          <li class="active">{{$prop->nombre}}</li>
        </ol>
      </div>
    </section>



            </div>
        </div>
      </div>
    </section>
  </div>

@endsection

