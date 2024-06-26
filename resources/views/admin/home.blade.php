@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<div class="row text-center">
    <img src="/logo.jpg" width="12%">
    <h1><I>Bengkel Fauzan Motor</h1>

</div>


<div class="row">
  <div class="col-xs-12">
    <div class="box box-warning">
      <div class="box-header">
        <h3 class="box-title"><i class="fa fa-clipboard"></i> Hasil Perhitungan</h3>

        <div class="box-tools">
          
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tbody>
          <tr>
            <th class="text-center">No</th>
            <th>Nama</th>
            <th>Jan</th>
            <th>Feb</th>
            <th>Maret</th>
            <th>Class</th>
            <th> Euclidean Distance</th>
            <th> Ranking</th>
          </tr>
          @foreach ($data as $key => $item)
          <tr>
              <td class="text-center">{{1 + $key}}</td>
              <td>{{$item->nama}}</td>
              <td>{{$item->januari}}</td>
              <td>{{$item->februari}}</td>
              <td>{{$item->maret}}</td>
              <td>{{$item->class}}</td>
              <td>{{$item->ed}}</td>
              <td>{{$item->rank}}</td>
          </tr>
          @endforeach
          
        </tbody></table>
      </div>
      <!-- /.box-body -->
    </div>
  </div>
</div>

@endsection
@push('js')

<script src="/assets/bower_components/chart.js/Chart.js"></script>
<script>
    $(function () {
      /* ChartJS
       * -------
       * Here we will create a few charts using ChartJS
       */
      
      var areaChartData = {
        labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
          {
            label               : 'Surat Kematian',
            fillColor           : 'rgba(210, 214, 222, 1)',
            strokeColor         : 'rgba(210, 214, 222, 1)',
            pointColor          : 'rgba(210, 214, 222, 1)',
            pointStrokeColor    : '#c1c7d1',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data                : [65, 59, 80, 81, 56, 55, 40]
          },
          {
            label               : 'Surat Pernyataan',
            fillColor           : 'rgba(60,141,188,0.9)',
            strokeColor         : 'rgba(60,141,188,0.8)',
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [28, 48, 40, 19, 86, 27, 90]
          }
        ]
      }
      //-------------
      //- BAR CHART -
      //-------------
      var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
      var barChart                         = new Chart(barChartCanvas)
      var barChartData                     = areaChartData
      barChartData.datasets[1].fillColor   = '#00a65a'
      barChartData.datasets[1].strokeColor = '#00a65a'
      barChartData.datasets[1].pointColor  = '#00a65a'
      var barChartOptions                  = {
        //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
        scaleBeginAtZero        : true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines      : true,
        //String - Colour of the grid lines
        scaleGridLineColor      : 'rgba(0,0,0,.05)',
        //Number - Width of the grid lines
        scaleGridLineWidth      : 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines  : true,
        //Boolean - If there is a stroke on each bar
        barShowStroke           : true,
        //Number - Pixel width of the bar stroke
        barStrokeWidth          : 2,
        //Number - Spacing between each of the X value sets
        barValueSpacing         : 5,
        //Number - Spacing between data sets within X values
        barDatasetSpacing       : 1,
        //String - A legend template
        legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
        //Boolean - whether to make the chart responsive
        responsive              : true,
        maintainAspectRatio     : true
      }
  
      barChartOptions.datasetFill = false
      barChart.Bar(barChartData, barChartOptions)
    })
</script>
@endpush
