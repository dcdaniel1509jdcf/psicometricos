@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div id="container"></div>
            <div class="accordion panel-group" id="accordionExample">
                <div class="panel panel-default">
                  <div class="panel-heading" id="headingOne">
                    <h5 class="panel-title">
                      <a style="text-decoration:none" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Resultado Global
                      </a>
                    </h5>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="panel-body">
                        {!! nl2br(e($res)) !!}
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" id="headingTwo">
                    <h5 class="panel-title">
                      <a  style="text-decoration:none" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Trabajo en equipo
                      </a>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="panel-body">
                         {!! nl2br(e($equipo)) !!}
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" id="headingThree">
                    <h5 class="panel-title">
                      <a style="text-decoration:none" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Toma de decisiones
                      </a>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="panel-body">
                        {!! nl2br(e($desicion)) !!}
                    </div>
                  </div>
                </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" id="heading4">
                          <h5 class="panel-title">
                            <a style="text-decoration:none" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            Persistencia
                            </a>
                          </h5>
                        </div>
                        <div id="collapse4" class="collapse " aria-labelledby="heading4" data-parent="#accordionExample">
                            <div class="panel-body">
                            {!! nl2br(e($persistencia)) !!}
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" id="heading5">
                          <h5 class="panel-title">
                            <a style="text-decoration:none" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse4">
                                Liderazgo
                            </a>
                          </h5>
                        </div>
                        <div id="collapse5" class="collapse " aria-labelledby="heading5" data-parent="#accordionExample">
                            <div class="panel-body">
                                {!! nl2br(e($liderazgo)) !!}
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" id="heading6">
                          <h5 class="panel-title">
                            <a style="text-decoration:none" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            Inteligencia emocional
                            </a>
                          </h5>
                        </div>
                        <div id="collapse6" class="collapse " aria-labelledby="heading6" data-parent="#accordionExample">
                            <div class="panel-body">
                        {!! nl2br(e($emocional)) !!}
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" id="heading7">
                          <h5 class="panel-title">
                            <a style="text-decoration:none" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                Correr riesgos calculados
                            </a>
                          </h5>
                        </div>
                        <div id="collapse7" class="collapse " aria-labelledby="heading7" data-parent="#accordionExample">
                            <div class="panel-body">
                        {!! nl2br(e($riegos)) !!}
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" id="heading8">
                          <h5 class="panel-title">
                            <a style="text-decoration:none" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                            Comunicación efectiva
                            </a>
                          </h5>
                        </div>
                        <div id="collapse8" class="collapse " aria-labelledby="heading8" data-parent="#accordionExample">
                            <div class="panel-body">
                        {!! nl2br(e($comunicacion)) !!}
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" id="heading9">
                          <h5 class="panel-title">
                            <a style="text-decoration:none" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                Compromiso
                            </a>
                          </h5>
                        </div>
                        <div id="collapse9" class="collapse " aria-labelledby="heading9" data-parent="#accordionExample">
                            <div class="panel-body">
                        {!! nl2br(e($compromiso)) !!}
                            </div>
                        </div>
                    </div>

                </div>
                    <br class="py-1">
                    <a href="https://emprende-actua.com/" class="btn btn-md btn-danger form-control">Salir</a>
                    <br class="py-4">
                    <label for=""> </label>
<div class="row">
<div class="col-md-6"></div>
<div class="col-md-6"></div>
</div>

            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
    history.forward();
    window.history.forward();

    $(window).bind('beforeunload', function(e) {
        return "Unloading this page may lose data. What do you want to do..."
        e.preventDefault();
    });


     Highcharts.setOptions({
        colors: ['#78288C'],
    });

     const chart = Highcharts.chart('container', {
         chart: {
             type: 'bar'
         },
         title: {
             text: 'Test de habilidades blandas'
         },


         xAxis: {
             categories: ['Trabajo en equipo','Toma de decisiones', 'Persistencia', 'Liderazgo', 'Inteligencia emocional', 'Correr riesgos calculados', 'Comunicación efectiva', 'Compromiso']
         },
         yAxis: {
             softMax: 20,
             title: {
                 text: ' '
             }
         },

         plotOptions: {
             series: {
                 allowPointSelect: false
             }
         },
         series: [{
            //type: 'line',

             //data: userData
             name: 'Resultado obtenido',
              data: [{{$vequipo}}, {{$vdesicion}}, {{$vpersistencia}}, {{$vliderazgo}}, {{$vemocional}}, {{$vriesgo}}, {{$vcomunicacion}}, {{$vcompromiso}}]
         }],
         responsive: {
             rules: [{
                 condition: {
                     maxWidth: 500
                 },
                 chartOptions: {
                     legend: {
                         layout: 'horizontal',
                         align: 'center',
                         verticalAlign: 'bottom'
                     }
                 }
             }]
         }
     });
 </script>
@endsection
