@extends('layouts.master')


@section('scripts')
  <script type="text/javascript" src="{{asset('/js/Chart.js')}}"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  <script type="text/javascript">
   $(document).ready(function() {
    var ctx = document.getElementById("myChart");
    var tipo_de_empresas = {!!$tipo_de_empresas!!};
    var tipo_de_empresas_count = {!!$tipo_de_empresas_count!!};

    var chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: {!!$tipo_de_empresas!!},
        datasets: [{
            label: 'Tipos de Forncedores',
            data: {!!$tipo_de_empresas_count!!},
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 255, 16, 0.2)'      
        
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 255, 16, 0.2)'
            ],
            borderWidth: 2
        }]
    },
    options: {
    
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }],
            xAxes: [{
                gridLines: {
                offsetGridLines: true
            }
            }]
        }
    }
  });
  
});

var defaultLegendClickHandler = Chart.defaults.global.legend.onClick;
var newLegendClickHandler = function (e, legendItem) {
    var index = legendItem.datasetIndex;

    if (index > 1) {
        // Do the original logic
        defaultLegendClickHandler(e, legendItem);
    } else {
        let ci = this.chart;
        [ci.getDatasetMeta(0),
         ci.getDatasetMeta(1)].forEach(function(meta) {
            meta.hidden = meta.hidden === null? !ci.data.datasets[index].hidden : null;
        });
        ci.update();
    }
};


var ctx = document.getElementById("kyv_resume");
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
        labels: ["Empresas Nacionais: KYV - YES", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        },
        legend: {
            position: 'right',
            display: true,
            labels: {
                fontColor: 'rgb(0, 0, 128)',
            },
        }
    }
});

  </script>
@endsection


@section('content')
    <div class="container">
        <div class="col-md-6">
            <canvas id="myChart" width="400" height="400"></canvas>
        </div>
        <div class="col-md-6">
            <canvas id="kyv_resume" width="400" height="400"></canvas>
        </div>
    </div>
@endsection
