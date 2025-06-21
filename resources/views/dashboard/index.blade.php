@extends('layouts.main')
@section('p-title')
    Dashboard
@endsection
@section('bread-item')
    dashboard
@endsection
@section('main') 
<div class="row">
  @foreach ($data as $data)
  <div class="col-lg-3 col-sm-6">
    <div class="card-box {{$data->color}}">
        <div class="inner">
            <h3 class="text-white">{{$data->total}}</h3>
            <h4 class="text-white">{{$data->name}}</h4>
        </div>
        <div class="icon">
            <i class="fa fa-users" aria-hidden="true"></i>
        </div>
        <a class="card-box-footer"></a>
    </div>
  </div>
  @endforeach
  @foreach ($years_datas as $year)
  <div class="col-lg-3 col-sm-6">
    <div class="card-box {{$year->color}}">
        <div class="inner">
            <h3 class="text-white">{{$year->total}}</h3>
            <h4 class="text-white">
              @if ($year->year == '1')
                FIRST
              @endif 
              @if ($year->year == '2')
                SECOND
              @endif 
              @if ($year->year == '3')
                THIRD
              @endif 
              @if ($year->year == '4')
                FOURTH
              @endif 
              YEAR
            </h4>
        </div>
        <div class="icon">
            <i class="fa fa-users" aria-hidden="true"></i>
        </div>
        <a class="card-box-footer"></a>
    </div>
  </div>
  @endforeach
</div>
<div class="row mt-3">
  <div class="col-md-8">
    <div class="card px-2 py-2">
      <div id="students_chart" style="height: 350px;"></div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card px-2 py-2">
      <div id="years_chart" style="height: 350px;"></div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
    var msg = @json(Session::get('msg'));
    var success = @json(Session::get('success'));
    if(success){
        swal({
            title: "Success",
            text: success,
            type: "success"
        });
    }
    if(msg){
        swal({
            title: "Error",
            text: msg,
            type: "error"
        });
    }
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawStudentChart);
    google.charts.setOnLoadCallback(drawYearChart);

    function drawStudentChart() {
      var student = google.visualization.arrayToDataTable({{ Js::from($students) }});
      var student_chart = new google.charts.Bar(document.getElementById('students_chart'));
      student_chart.draw(student);
    }

    function drawYearChart(){
      var year = google.visualization.arrayToDataTable({{ Js::from($years) }});
      var year_chart = new google.charts.Bar(document.getElementById('years_chart'));
      year_chart.draw(year);
    }
</script>
@endsection