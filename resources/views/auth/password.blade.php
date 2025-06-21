@extends('layouts.main')
@section('p-title')
    Change Password
@endsection
@section('bread-item')
    change password
@endsection
@section('main')
<div class="card shadow">
    <div class="row">
        <div class="col-12">
            <div class="card-body">
                <div>
                    @if ($errors->any())
                        @foreach ($errors->all() as $err)
                            <p class="alert alert-danger">{{ $err }}</p>
                        @endforeach
                    @endif
                    <div class="tab-pane">
                        <form action="{{route('password.action')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h5 class="mb-4 text-uppercase">{{Auth::user()->name}}</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}" readonly placeholder="Enter name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" value="{{Auth::user()->username}}" readonly placeholder="Enter user name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}" readonly placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" value="{{Auth::user()->phone}}" readonly name="phone" placeholder="Enter phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="opassword" class="form-label">Old Password</label>
                                        <input type="password" class="form-control" id="opassword" name="opassword" placeholder="Enter old password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="npassword" class="form-label">New Password</label>
                                        <input type="password" class="form-control" id="npassword" name="npassword" placeholder="Enter new password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="cpassword" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="cpassword"  name="cpassword" placeholder="Enter confirm password">
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-dark mt-2"><i class="fa fa-refresh"></i> Change Password</button>
                                <a href="/home" class="btn btn-dark mt-2"><i class="fa fa-arrow-left"></i> Back</a>
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
        var err = @json(Session::get('error'));
        var success = @json(Session::get('success'));
        if(success){
            swal({
                title: "Success",
                text: success,
                type: "success"
            });
        }
        if(err){
            swal({
                title: "Error",
                text: err,
                type: "error"
            });
        }
    </script>
@endsection