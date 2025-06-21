@extends('layouts.main')
@section('p-title')
    Student
@endsection
@section('bread-item')
    student
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
                            <h5 class="mb-4 text-uppercase">{{$student->firstname}} {{$student->lastname}}</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname" value="{{$student->firstname}}" readonly placeholder="Enter first name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname" value="{{$student->lastname}}" readonly placeholder="Enter last name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <input class="form-control" type="text" value="{{$student->gender}}" readonly id="gender" name="gender">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="dob" class="form-label">DOB</label>
                                        <input type="text" class="form-control" id="dob" value="{{$student->dob}}" readonly name="dob" placeholder="Enter nic">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{$student->email}}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" value="{{$student->phone}}" readonly name="phone" placeholder="Enter phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="stu_number" class="form-label">Student Number</label>
                                        <input type="text" class="form-control" id="stu_number" name="stu_number" value="{{$student->stu_number}}" readonly placeholder="Enter student number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="stu_mail" class="form-label">Student Mail</label>
                                        <input type="email" class="form-control" id="stu_mail" value="{{$student->student_mail}}" name="stu_mail" readonly placeholder="Enter student mail">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="faculty" class="form-label">Faculty</label>
                                        <input class="form-control" type="text" value="{{$student->faculty}}" readonly id="faculty" name="faculty">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="course" class="form-label">Course</label>
                                        <input class="form-control" type="text" value="{{$student->course}}" readonly id="course" name="course">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="father_name" class="form-label">Father Name</label>
                                        <input class="form-control" type="text" value="{{$student->father_name}}" readonly id="father_name" name="father_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="mother_name" class="form-label">Mother Name</label>
                                        <input class="form-control" type="text" value="{{$student->mother_name}}" readonly id="mother_name" name="mother_name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="father_job" class="form-label">Father Job</label>
                                        <input class="form-control" type="text" value="{{$student->father_job}}" readonly id="father_job" name="father_job">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="mother_job" class="form-label">Mother Job</label>
                                        <input class="form-control" type="text" value="{{$student->mother_job}}" readonly id="mother_job" name="mother_job">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="sibiling" class="form-label">Sibiling</label>
                                        <input class="form-control" type="text" value="{{$student->sibiling}}" readonly id="sibiling" name="sibiling">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="district" class="form-label">District</label>
                                        <input class="form-control" type="text" value="{{$student->district}}" readonly id="district" name="district">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="ag_office_division" class="form-label">Ag Office Division</label>
                                        <input type="text" class="form-control" id="ag_office_division" name="ag_office_division" value="{{$student->ag_office_division}}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="gs_office_division" class="form-label">Gs Office Division</label>
                                        <input type="text" class="form-control" id="gs_office_division" name="gs_office_division" value="{{$student->gs_office_division}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea class="form-control" id="address" name="address" rows="4" placeholder="Enter Address..." readonly>{{$student->address}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="comment" class="form-label">Comments</label>
                                        <textarea class="form-control" name="comment" id="comment" rows="4"  placeholder="Enter Comments..." readonly>{{$student->comment}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <a href="/students" class="btn btn-dark mt-2"><i class="fa fa-arrow-left"></i> Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection