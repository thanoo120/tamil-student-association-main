@extends('layouts.main')
@section('p-title')
    Notice
@endsection
@section('bread-item')
    notice
@endsection
@section('main')
<div class="card shadow">
    <div class="row">
        <div class="col-12">
            <div class="card-body">
                <div>
                    <div class="tab-pane">
                        <form action="{{ route('notice.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h5 class="mb-4 text-uppercase"> New Notice</h5>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="notice" class="form-label">Notice</label>
                                        <textarea class="form-control" id="notice" rows="4" maxlength="250" name="notice" placeholder="Write notice...">{{old('notice')}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="description" rows="4" maxlength="250" name="description" placeholder="Write description...">{{old('description')}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-dark mt-2"><i class="mdi mdi-content-save"></i> Post</button>
                                <a href="/notice" class="btn btn-dark mt-2"><i class="fa fa-arrow-left"></i> Back</a>
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