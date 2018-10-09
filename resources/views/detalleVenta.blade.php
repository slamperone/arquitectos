@extends('template')

@section('contenido')

<div class="content">

     <!--======= SUB BANNER =========-->
    <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <h4>{{$prop->nombreCorto}}</h4>
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="{{ url('') }}">INICIO</a></li>
          <li><a href="{{ route('venta.index') }}">EN VENTA</a></li>
          <li class="active">{{$prop->nombreCorto}}</li>
        </ol>
      </div>
    </section>



<pre>
<?php
#var_dump($prop);
?>
</pre>


    <!--======= PAGES INNER =========-->
    <section class="section-p-30px pages-in item-detail-page">
      <div class="container">
        <div class="row">

          <!--======= IMAGES SLIDER =========-->
          <div class="col-sm-6 large-detail animate fadeInLeft" data-wow-delay="0.4s">
            <div class="images-slider">
              <ul class="slides">


                 @php $images = json_decode($prop->fotosPrincipal); @endphp

                  @if($images)
                      @php $images = array_slice($images, 0, 3); @endphp
                          @foreach($images as $image)

                          <li data-thumb="@if( !filter_var($image, FILTER_VALIDATE_URL)){{
                              Voyager::image( $image ) }}@else{{ $image }}@endif">
                            <img class="img-responsive" src="@if( !filter_var($image, FILTER_VALIDATE_URL)){{
                              Voyager::image( $image ) }}@else{{ $image }}@endif"  alt="{{$prop->nombre}}"> </li>
                          @endforeach
                  @endif

              </ul>
            </div>
          </div>

          <!--======= ITEM DETAILS =========-->
          <div class="col-sm-6 animate fadeInRight" data-wow-delay="0.4s">
            <div class="row">
              <div class="col-sm-12">
                <h5>{{$prop->nombreCorto}}</h5>
                PRECIOS DESDE: <span class="price">$ {{$prop->precio}} </span> </div>
              <!--<div class="col-sm-12"> <span class="code">PRODUCT CODE: SKU: PDID-BC-01.</span>-->
                <div class="some-info no-border"> <br>
                  <div class="in-stoke"> 
                    <i class="fa fa-check-circle"></i>Superficie: {{$prop->superficie}}</div>

                  <div class="stars">
                      @for ($i = 1; $i <= $prop->estrellas; $i++)
                                <i class="fa fa-star"></i>
                          @endfor
                    </div>

                <hr>
              </div>
            </div>

           {!! $prop->descCorta !!}

            </div>
          </div>
        </div>


                <!--======= PRODUCT DESCRIPTION =========-->
        <div class="item-decribe animate fadeInUp" data-wow-delay="0.4s">
          <div class="text-center">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">

              <li role="presentation" class="active">
                <a href="#descr" aria-controls="men" role="tab" data-toggle="tab">
                      DESCRIPCIÓN</a>
              </li>

              <li role="presentation">
                <a href="#review" aria-controls="women" role="tab" data-toggle="tab">
                      PLANTAS TIPO</a>
              </li>


              <li role="presentation">
                <a href="#tags" aria-controls="access" role="tab" data-toggle="tab">
                        AVANCE DE OBRA</a>
              </li>
            </ul>
          </div>

          <!-- Tab panes -->
          <div class="tab-content">
            <!-- DESCRIPTION -->
            <div role="tabpanel" class="tab-pane fade  in active" id="descr">
              {!! $prop->desc !!}
              <br>

          </div>


          <!-- REVIEW -->
            <div role="tabpanel" class="tab-pane fade" id="review">
              <h5>Superficie: {{$prop->superficie}}</h5>

            <!--======= PAGES INNER =========-->
    <section class="section-p-30px pages-in item-detail-page">
      <div class="container">
        <div class="row">

                    <!--======= IMAGES SLIDER =========-->
          <div class="col-sm-12 large-detail animate fadeInUp" data-wow-delay="0.4s">

            @php $images = json_decode($prop->plantas); @endphp

                  @if($images)
                      @php $images = array_slice($images, 0, 3); @endphp
                          @foreach($images as $planta)

                          <img class="zoom_05 img-responsive animate fadeInUp" data-wow-delay="0.4s" src="
          @if( !filter_var($planta, FILTER_VALIDATE_URL)){{
                              Voyager::image( $planta ) }}@else{{ $planta }}@endif" data-zoom-image="@if( !filter_var($planta, FILTER_VALIDATE_URL)){{
                              Voyager::image( $planta ) }}@else{{ $planta }}@endif" >
                          @endforeach
                  @endif

          </div>
          </div>
        </div>

      </div>

           <!-- TAGS -->
            <div role="tabpanel" class="tab-pane fade" id="tags">
                      @php $images = json_decode($prop->avence); @endphp


                  @if($images)
                      @php $images = array_slice($images, 0, 3); @endphp
                          @foreach($images as $planta)

                          <img class="zoom_05 img-responsive animate fadeInUp" data-wow-delay="0.4s" src="
          @if( !filter_var($planta, FILTER_VALIDATE_URL)){{
                              Voyager::image( $planta ) }}@else{{ $planta }}@endif" data-zoom-image="@if( !filter_var($planta, FILTER_VALIDATE_URL)){{
                              Voyager::image( $planta ) }}@else{{ $planta }}@endif" >
                          @endforeach
                  @endif
            </div>
      </div>

<div class="container">
      <div class="row" style="margin: 30px 0;">
<!-- ADD REVIEW -->
              <h6 class="margin-t-40">CONTACTO</h6>
              <form id="review-form">
                <ul class="row">
                  <li class="col-sm-6">
                    <label> *NOMBRE
                      <input type="text" value="" placeholder="">
                    </label>
                  </li>
                  <li class="col-sm-6">
                    <label> *EMAIL
                      <input type="email" value="" placeholder="">
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <label> *MENSAJE
                      <textarea></textarea>
                    </label>
                  </li>
                  <li class="col-sm-6">
                    <button type="submit" class="btn btn-dark btn-small pull-right no-margin">ENVIAR</button>
                  </li>
                </ul>
              </form>

      </div>
    </div>

  </div> <!-- cierra content -->

@endsection

