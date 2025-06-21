@extends('layouts.main')
@section('p-title')
    Service
@endsection
@section('bread-item')
    service
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
                            <h5 class="mb-4 text-uppercase">{{$service->heading}}</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Posted By</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{$service->added_by}}" readonly placeholder="Enter posted by">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="heading" class="form-label">Heading</label>
                                        <input type="text" class="form-control" id="heading" name="heading" value="{{$service->heading}}" readonly placeholder="Enter heading">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="service" class="form-label">Service</label>
                                        <textarea class="form-control" readonly id="service" name="service" rows="4" placeholder="Enter service...">{{$service->service}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Image</label><br>
                                        <img width="100%" src="{{asset('assets/images/service')."/".$service->image}}" alt="{{$service->heading}}">
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <a href="/services" class="btn btn-dark mt-2"><i class="fa fa-arrow-left"></i> Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection