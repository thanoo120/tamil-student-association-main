@extends('layouts.main')
@section('p-title')
    Lecturer
@endsection
@section('bread-item')
    lecturer
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
                            <h5 class="mb-4 text-uppercase">{{$lecturer->firstname}} {{$lecturer->lastname}}</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname" value="{{$lecturer->firstname}}" readonly placeholder="Enter first name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname" value="{{$lecturer->lastname}}" readonly placeholder="Enter last name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{$lecturer->email}}" readonly placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" value="{{$lecturer->phone}}" readonly name="phone" placeholder="Enter phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nic" class="form-label">NIC</label>
                                        <input type="text" class="form-control" id="nic" value="{{$lecturer->nic}}" readonly name="nic" placeholder="Enter nic">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="dob" class="form-label">DOB</label>
                                        <input type="text" class="form-control" id="dob" value="{{$lecturer->dob}}" readonly name="dob" placeholder="Enter nic">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <input class="form-control" type="text" value="{{$lecturer->gender}}" readonly id="gender" name="gender">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="district" class="form-label">District</label>
                                        <input class="form-control" type="text" value="{{$lecturer->district}}" readonly id="district" name="district">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea class="form-control" readonly id="address" name="address" rows="4" placeholder="Enter Address...">{{$lecturer->address}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="bio" class="form-label">Bio</label>
                                        <textarea class="form-control" readonly name="bio" id="bio" rows="4" placeholder="Enter Bio...">{{$lecturer->bio}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <a href="/lecturers" class="btn btn-dark mt-2"><i class="fa fa-arrow-left"></i> Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection