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
                        <form action="{{ route('years.update', $year->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PATCH') 
                            @csrf
                            <h5 class="mb-4 text-uppercase"> Update Batch</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="year" class="form-label">Year</label>
                                        <input type="text" class="form-control" id="year" name="year" value="{{$year->year}}" placeholder="Enter year">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="hidden" class="form-control" id="dp" value="{{$year->image}}" name="dp" placeholder="select image">
                                        <input class="form-control" accept="image/webp" type="file" id="image" name="image">
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-dark mt-2"><i class="fa fa-refresh"></i> Update</button>
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

@section('scripts')
    <script>
        var msg = @json(Session::get('msg'));
        if(msg){
            swal({
                title: "Error",
                text: msg,
                type: "error"
            });
        }
    </script>
@endsection