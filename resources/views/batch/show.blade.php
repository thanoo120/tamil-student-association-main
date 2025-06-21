@extends('layouts.main')
@section('p-title')
    Year
@endsection
@section('bread-item')
    year
@endsection
@section('main')
<div class="card shadow">
    <div class="row">
        <div class="col-12">
            <div class="card-body">
                <div>
                    <div class="tab-pane">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h5 class="mb-4 text-uppercase">{{$year->year}}</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Added By</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{$year->added_by}}" readonly placeholder="Enter added by">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="year" class="form-label">Year</label>
                                        <input type="text" class="form-control" id="year" name="year" value="{{$year->year}}" readonly placeholder="Enter year">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Image</label><br>
                                        <img width="100%" src="{{asset('assets/images/year')."/".$year->image}}" alt="{{$year->year}}">
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <a href="/years" class="btn btn-dark mt-2"><i class="fa fa-arrow-left"></i> Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection