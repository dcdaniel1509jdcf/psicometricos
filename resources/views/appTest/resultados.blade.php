@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2"></div>
        <div class="col-md-8">


            <div id="container"></div>


            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        S.H GESTOR/SABER-HACER</a>
                    </h4>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">
                        {{$sh}}
                    <br> <br>
                    <strong>Resultado:</strong><br>
                    {{$rsh}}
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                        S.S INNOVADOR / SABER-SABER</a>
                    </h4>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                        {{$ss}}
                        <br> <br>
                        <strong>Resultado:</strong><br>
                        {{$rss}}</div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                        S.SR NEGOCIADOR/SABER-SER</a>
                    </h4>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">{{$sr}}
                        <br> <br>
                        <strong>Resultado:</strong><br>
                        {{$rsr}}</div>
                  </div>
                </div>
              </div>
              <br class="py-1">
              <a href="https://emprende-actua.com/" class="btn form-control btn-md btn-danger">Salir</a>
              <br class="py-2">
              <label for=""> </label>


        </div>
    </div>
</div>
<script type="text/javascript">

    window.history.forward();
history.forward();
    window.history.forward();
    function disableF5(e) { if ((e.which || e.keyCode) == 116) e.preventDefault(); };
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
            categories: ['S.S INNOVADOR / SABER-SABER','S.H GESTOR/SABER-HACER', 'S.SR NEGOCIADOR/SABER-SER']
        },
        yAxis: {
            softMax: 40,
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
             data: [{{$vrss}}, {{$vrsh}}, {{$vrsr}}]
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
