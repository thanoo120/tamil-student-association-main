@extends('blog.include.app')
@section('main')
    @include('blog.include.main')
@endsection
@section('scripts')
    <script>
        var msg = @json(Session::get('msg'));
        var success = @json(Session::get('success'));
        if(msg){
            swal({
                title: "Error",
                text: msg,
                type: "error"
            });
        }

        if(success){
            swal({
                title: "Success",
                text: success,
                type: "success"
            });
        }
    </script>
@endsection