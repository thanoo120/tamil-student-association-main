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
                        <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PATCH') 
                            @csrf
                            <h5 class="mb-4 text-uppercase"> Update Event</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="heading" class="form-label">Heading</label>
                                        <input type="text" class="form-control" id="heading" name="heading" value="{{$event->heading}}" placeholder="Enter heading">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="hidden" class="form-control" id="dp" value="{{$event->image}}" name="dp" placeholder="select image">
                                        <input class="form-control" accept="image/webp" type="file" id="image" name="image">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="event" class="form-label">Event</label>
                                        <textarea class="form-control" maxlength="400" id="event" name="event" rows="4" value="{{$event->event}}" placeholder="Enter Event...">{{$event->event}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-dark mt-2"><i class="fa fa-refresh"></i> Update</button>
                                <a href="/events" class="btn btn-dark mt-2"><i class="fa fa-arrow-left"></i> Back</a>
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