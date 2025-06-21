@extends('layouts.main')
@section('p-title')
    Event
@endsection
@section('bread-item')
    event
@endsection
@section('main')
<div class="card shadow">
    <div class="row">
        <div class="col-12">
            <div class="card-body">
                <div>
                    <div class="tab-pane">
                        <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h5 class="mb-4 text-uppercase"> New Event</h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="heading" class="form-label">Heading</label>
                                        <input type="text" class="form-control" name="heading"  value="{{old('heading')}}"id="heading" placeholder="Enter heading">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input class="form-control" accept="image/webp" type="file" id="image" name="image">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="event" class="form-label">Event</label>
                                        <textarea class="form-control" maxlength="400" id="event" rows="4" name="event" placeholder="Write event...">{{old('event')}}</textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="text-end">
                                <button type="submit" class="btn btn-dark mt-2"><i class="mdi mdi-content-save"></i> Post</button>
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