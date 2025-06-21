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
                        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h5 class="mb-4 text-uppercase"> Add New Student</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname" value="{{old('firstname')}}" placeholder="Enter first name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname" value="{{old('lastname')}}" placeholder="Enter last name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select class="form-select" name="gender" id="gender" aria-label="Default select example">
                                            <option value="">[Select Gender]</option>
                                            <option value="Male" {{ (old("gender") == "Male" ? "selected":"") }}>Male</option>
                                            <option value="Female" {{ (old("gender") == "Female" ? "selected":"") }}>Female</option>
                                            <option value="Other" {{ (old("gender") == "Other" ? "selected":"") }}>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="dob" class="form-label">DOB</label>
                                        <input type="date" class="form-control" id="dob" value="{{old('dob')}}" name="dob" placeholder="Enter dob">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" value="{{old('phone')}}" name="phone" placeholder="Enter phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="stu_number" class="form-label">Student Number</label>
                                        <input type="text" class="form-control" id="stu_number" name="stu_number" value="{{old('stu_number')}}" placeholder="Enter student number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="stu_mail" class="form-label">Student Mail</label>
                                        <input type="email" class="form-control" id="stu_mail" value="{{old('stu_mail')}}" name="stu_mail" placeholder="Enter student mail">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="faculty" class="form-label">Faculty</label>
                                        <select class="form-select" name="faculty" id="faculty" aria-label="Default select example">
                                            <option value="">[Select Faculty]</option>
                                            <option value="Faculty Of Commerce & Management Studies" {{ (old("faculty") == "Faculty Of Commerce & Management Studies" ? "selected":"") }}>Faculty Of Commerce & Management Studies</option>
                                            <option value="Faculty Of Computing & Technology" {{ (old("faculty") == "Faculty Of Computing & Technology" ? "selected":"") }}>Faculty Of Computing & Technology</option>
                                            <option value="Faculty Of Humanities" {{ (old("faculty") == "Faculty Of Humanities" ? "selected":"") }}>Faculty Of Humanities</option>
                                            <option value="Faculty Of Medicine" {{ (old("faculty") == "Faculty Of Medicine" ? "selected":"") }}>Faculty Of Medicine</option>
                                            <option value="Faculty Of Science" {{ (old("faculty") == "Faculty Of Science" ? "selected":"") }}>Faculty Of Science</option>
                                            <option value="Faculty Of Social Science" {{ (old("faculty") == "Faculty Of Social Science" ? "selected":"") }}>Faculty Of Social Science</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="course" class="form-label">Course</label>
                                        <input type="text" class="form-control" id="course" name="course" value="{{old('course')}}" placeholder="Enter course name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="father_name" class="form-label">Father Name</label>
                                        <input type="text" class="form-control" id="father_name" name="father_name" value="{{old('father_name')}}" placeholder="Enter father name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="mother_name" class="form-label">Mother Name</label>
                                        <input type="text" class="form-control" id="mother_name" name="mother_name" value="{{old('mother_name')}}" placeholder="Enter mother name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="father_job" class="form-label">Father Job</label>
                                        <input type="text" class="form-control" id="father_job" name="father_job" value="{{old('father_job')}}" placeholder="Enter father job">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="mother_job" class="form-label">Mother Job</label>
                                        <input type="text" class="form-control" id="mother_job" name="mother_job" value="{{old('mother_job')}}" placeholder="Enter mother job">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="sibiling" class="form-label">Sibiling</label>
                                        <select class="form-select" name="sibiling" id="sibiling" aria-label="Default select example">
                                            <option value="">[Select Sibiling]</option>
                                            <option value="0" {{ (old("sibiling") == "0" ? "selected":"") }}>0</option>
                                            <option value="1" {{ (old("sibiling") == "1" ? "selected":"") }}>1</option>
                                            <option value="2" {{ (old("sibiling") == "2" ? "selected":"") }}>2</option>
                                            <option value="3" {{ (old("sibiling") == "3" ? "selected":"") }}>3</option>
                                            <option value="4" {{ (old("sibiling") == "4" ? "selected":"") }}>4</option>
                                            <option value="5" {{ (old("sibiling") == "5" ? "selected":"") }}>5</option>
                                            <option value="6" {{ (old("sibiling") == "6" ? "selected":"") }}>6</option>
                                            <option value="7" {{ (old("sibiling") == "7" ? "selected":"") }}>7</option>
                                            <option value="Other" {{ (old("sibiling") == "Other" ? "selected":"") }}>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="district" class="form-label">District</label>
                                        <select class="form-select" name="district" id="district" aria-label="Default select example">
                                            <option value="">[Select District]</option>
                                            <option value="Jaffna" {{ (old("district") == "Jaffna" ? "selected":"") }}>Jaffna</option>
                                            <option value="Colombo" {{ (old("district") == "Colombo" ? "selected":"") }}>Colombo</option>
                                            <option value="Gampaha" {{ (old("district") == "Gampaha" ? "selected":"") }}>Gampaha</option>
                                            <option value="Kalutara" {{ (old("district") == "Kalutara" ? "selected":"") }}>Kalutara</option>
                                            <option value="Kandy" {{ (old("district") == "Kandy" ? "selected":"") }}>Kandy</option>
                                            <option value="Matale" {{ (old("district") == "Matale" ? "selected":"") }}>Matale</option>
                                            <option value="Nuwara Eliya" {{ (old("district") == "Nuwara Eliya" ? "selected":"") }}>Nuwara Eliya</option>
                                            <option value="Galle" {{ (old("district") == "Galle" ? "selected":"") }}>Galle</option>
                                            <option value="Matara" {{ (old("district") == "Matara" ? "selected":"") }}>Matara</option>
                                            <option value="Hambantota" {{ (old("district") == "Hambantota" ? "selected":"") }}>Hambantota</option>
                                            <option value="Kilinochchi" {{ (old("district") == "Kilinochchi" ? "selected":"") }}>Kilinochchi</option>
                                            <option value="Mannar" {{ (old("district") == "Mannar" ? "selected":"") }}>Mannar</option>
                                            <option value="Vavuniya" {{ (old("district") == "Vavuniya" ? "selected":"") }}>Vavuniya</option>
                                            <option value="Mullaitivu" {{ (old("district") == "Mullaitivu" ? "selected":"") }}>Mullaitivu</option>
                                            <option value="Batticaloa" {{ (old("district") == "Batticaloa" ? "selected":"") }}>Batticaloa</option>
                                            <option value="Ampara" {{ (old("district") == "Ampara" ? "selected":"") }}>Ampara</option>
                                            <option value="Trincomalee" {{ (old("district") == "Trincomalee" ? "selected":"") }}>Trincomalee</option>
                                            <option value="Kurunegala" {{ (old("district") == "Kurunegala" ? "selected":"") }}>Kurunegala</option>
                                            <option value="Puttalam" {{ (old("district") == "Puttalam" ? "selected":"") }}>Puttalam</option>
                                            <option value="Anuradhapura" {{ (old("district") == "Anuradhapura" ? "selected":"") }}>Anuradhapura</option>
                                            <option value="Polonnaruwa" {{ (old("district") == "Polonnaruwa" ? "selected":"") }}>Polonnaruwa</option>
                                            <option value="Badulla" {{ (old("district") == "Badulla" ? "selected":"") }}>Badulla</option>
                                            <option value="Moneragala" {{ (old("district") == "Moneragala" ? "selected":"") }}>Moneragala</option>
                                            <option value="Ratnapura" {{ (old("district") == "Ratnapura" ? "selected":"") }}>Ratnapura</option>
                                            <option value="Kegalle" {{ (old("district") == "Kegalle" ? "selected":"") }}>Kegalle</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="ag_office_division" class="form-label">Ag Office Division</label>
                                        <input type="text" class="form-control" id="ag_office_division" name="ag_office_division" value="{{old('ag_office_division')}}" placeholder="Enter ag office division">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="gs_office_division" class="form-label">Gs Office Division</label>
                                        <input type="text" class="form-control" id="gs_office_division" name="gs_office_division" value="{{old('gs_office_division')}}" placeholder="Enter gs office division">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea class="form-control" id="address" name="address" value="{{old('address')}}" rows="4" placeholder="Enter Address..."></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="comment" class="form-label">Comments</label>
                                        <textarea class="form-control" name="comment" id="comment" rows="4" value="{{old('comment')}}" placeholder="Enter Comments..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-dark mt-2"><i class="mdi mdi-content-save"></i> Save</button>
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