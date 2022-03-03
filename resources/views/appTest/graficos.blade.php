<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Highcharts</title>
</head>

<body>
    <h1>Highcharts </h1>
    <div id="container"></div>
</body>

<script src="https://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript">
   var userData = <?php echo json_encode($userData)?>;
/*
    Highcharts.chart('container', {
        title: {
            text: 'New User Growth, 2020'
        },
        subtitle: {
            text: 'Source: positronx.io'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']        },
        yAxis: {
            title: {
                text: 'Number of New Users'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'New Users',
            data: userData
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
    */

    const chart = Highcharts.chart('container', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Y axis softMax is 100'
        },
        subtitle: {
            text: 'Click the button to change data max'
        },
        xAxis: {
            categories: ['Trabajo en equipo','Toma de decisiones', 'Persistencia', 'Liderazgo', 'Inteligencia emocional', 'Correr riesgos calculados', 'Comunicación efectiva', 'Compromiso']
        },
        yAxis: {
            softMax: 25,
            title: {
                text: 'Resultado obtenido'
            }
        },

        plotOptions: {
            series: {
                allowPointSelect: false
            }
        },
        series: [{
            //data: userData
            name: 'Resultado obtenido',
             data: [0, 1, 0, 2, 33, 5, 8,22]
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

</html>
