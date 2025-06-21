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
                        <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PATCH') 
                            @csrf
                            <h5 class="mb-4 text-uppercase"> Update Student</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname" value="{{$student->firstname}}" placeholder="Enter first name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname" value="{{$student->lastname}}" placeholder="Enter last name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select class="form-select" name="gender" id="gender" aria-label="Default select example">
                                            <option value="">[Select Gender]</option>
                                            <option value="Male" {{ ($student->gender == "Male" ? "selected":"") }}>Male</option>
                                            <option value="Female" {{ ($student->gender == "Female" ? "selected":"") }}>Female</option>
                                            <option value="Other" {{ ($student->gender == "Other" ? "selected":"") }}>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="dob" class="form-label">DOB</label>
                                        <input type="text" class="form-control" id="dob" value="{{ date('m/d/y',strtotime($student->dob)) }}" name="dob" placeholder="Enter dob">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{$student->email}}" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" value="{{$student->phone}}" name="phone" placeholder="Enter phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="stu_number" class="form-label">Student Number</label>
                                        <input type="text" class="form-control" id="stu_number" name="stu_number" value="{{$student->stu_number}}" placeholder="Enter student number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="student_mail" class="form-label">Student Mail</label>
                                        <input type="text" class="form-control" id="stu_mail" value="{{$student->student_mail}}" name="stu_mail" placeholder="Enter Student Mail">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="faculty" class="form-label">Faculty</label>
                                        <select class="form-select" name="faculty" id="faculty" aria-label="Default select example">
                                            <option value="">[Select Faculty]</option>
                                            <option value="Faculty Of Commerce & Management Studies" {{ ($student->faculty == "Faculty Of Commerce & Management Studies" ? "selected":"") }}>Faculty Of Commerce & Management Studies</option>
                                            <option value="Faculty Of Computing & Technology" {{ ($student->faculty == "Faculty Of Computing & Technology" ? "selected":"") }}>Faculty Of Computing & Technology</option>
                                            <option value="Faculty Of Humanities" {{ ($student->faculty == "Faculty Of Humanities" ? "selected":"") }}>Faculty Of Humanities</option>
                                            <option value="Faculty Of Medicine" {{ ($student->faculty == "Faculty Of Medicine" ? "selected":"") }}>Faculty Of Medicine</option>
                                            <option value="Faculty Of Science" {{ ($student->faculty == "Faculty Of Science" ? "selected":"") }}>Faculty Of Science</option>
                                            <option value="Faculty Of Social Science" {{ ($student->faculty == "Faculty Of Social Science" ? "selected":"") }}>Faculty Of Social Science</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="course" class="form-label">Course</label>
                                        <input type="text" class="form-control" id="course" name="course" value="{{$student->course}}" placeholder="Enter course name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="father_name" class="form-label">Father Name</label>
                                        <input type="text" class="form-control" id="father_name" name="father_name" value="{{$student->father_name}}" placeholder="Enter father name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="mother_name" class="form-label">Mother Name</label>
                                        <input type="text" class="form-control" id="mother_name" name="mother_name" value="{{$student->mother_name}}" placeholder="Enter mother name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="father_job" class="form-label">Father Job</label>
                                        <input type="text" class="form-control" id="father_job" name="father_job" value="{{$student->father_job}}" placeholder="Enter father job">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="mother_job" class="form-label">Mother Job</label>
                                        <input type="text" class="form-control" id="mother_job" name="mother_job" value="{{$student->mother_job}}" placeholder="Enter mother job">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="sibiling" class="form-label">Sibiling</label>
                                        <select class="form-select" name="sibiling" id="sibiling" aria-label="Default select example">
                                            <option value="">[Select Sibiling]</option>
                                            <option value="0" {{ ($student->sibiling == "0" ? "selected":"") }}>0</option>
                                            <option value="1" {{ ($student->sibiling == "1" ? "selected":"") }}>1</option>
                                            <option value="2" {{ ($student->sibiling == "2" ? "selected":"") }}>2</option>
                                            <option value="3" {{ ($student->sibiling == "3" ? "selected":"") }}>3</option>
                                            <option value="4" {{ ($student->sibiling == "4" ? "selected":"") }}>4</option>
                                            <option value="5" {{ ($student->sibiling == "5" ? "selected":"") }}>5</option>
                                            <option value="6" {{ ($student->sibiling == "6" ? "selected":"") }}>6</option>
                                            <option value="7" {{ ($student->sibiling == "7" ? "selected":"") }}>7</option>
                                            <option value="Other" {{ ($student->sibiling == "Other" ? "selected":"") }}>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="district" class="form-label">District</label>
                                        <select class="form-select" name="district" id="district" aria-label="Default select example">
                                            <option value="">[Select District]</option>
                                            <option value="Jaffna" {{ ($student->district == "Jaffna" ? "selected":"") }}>Jaffna</option>
                                            <option value="Colombo" {{ ($student->district == "Colombo" ? "selected":"") }}>Colombo</option>
                                            <option value="Gampaha" {{ ($student->district == "Gampaha" ? "selected":"") }}>Gampaha</option>
                                            <option value="Kalutara" {{ ($student->district == "Kalutara" ? "selected":"") }}>Kalutara</option>
                                            <option value="Kandy" {{ ($student->district == "Kandy" ? "selected":"") }}>Kandy</option>
                                            <option value="Matale" {{ ($student->district == "Matale" ? "selected":"") }}>Matale</option>
                                            <option value="Nuwara Eliya" {{ ($student->district == "Nuwara Eliya" ? "selected":"") }}>Nuwara Eliya</option>
                                            <option value="Galle" {{ ($student->district == "Galle" ? "selected":"") }}>Galle</option>
                                            <option value="Matara" {{ ($student->district == "Matara" ? "selected":"") }}>Matara</option>
                                            <option value="Hambantota" {{ ($student->district == "Hambantota" ? "selected":"") }}>Hambantota</option>
                                            <option value="Kilinochchi" {{ ($student->district == "Kilinochchi" ? "selected":"") }}>Kilinochchi</option>
                                            <option value="Mannar" {{ ($student->district == "Mannar" ? "selected":"") }}>Mannar</option>
                                            <option value="Vavuniya" {{ ($student->district == "Vavuniya" ? "selected":"") }}>Vavuniya</option>
                                            <option value="Mullaitivu" {{ ($student->district == "Mullaitivu" ? "selected":"") }}>Mullaitivu</option>
                                            <option value="Batticaloa" {{ ($student->district == "Batticaloa" ? "selected":"") }}>Batticaloa</option>
                                            <option value="Ampara" {{ ($student->district == "Ampara" ? "selected":"") }}>Ampara</option>
                                            <option value="Trincomalee" {{ ($student->district == "Trincomalee" ? "selected":"") }}>Trincomalee</option>
                                            <option value="Kurunegala" {{ ($student->district == "Kurunegala" ? "selected":"") }}>Kurunegala</option>
                                            <option value="Puttalam" {{ ($student->district == "Puttalam" ? "selected":"") }}>Puttalam</option>
                                            <option value="Anuradhapura" {{ ($student->district == "Anuradhapura" ? "selected":"") }}>Anuradhapura</option>
                                            <option value="Polonnaruwa" {{ ($student->district == "Polonnaruwa" ? "selected":"") }}>Polonnaruwa</option>
                                            <option value="Badulla" {{ ($student->district == "Badulla" ? "selected":"") }}>Badulla</option>
                                            <option value="Moneragala" {{ ($student->district == "Moneragala" ? "selected":"") }}>Moneragala</option>
                                            <option value="Ratnapura" {{ ($student->district == "Ratnapura" ? "selected":"") }}>Ratnapura</option>
                                            <option value="Kegalle" {{ ($student->district == "Kegalle" ? "selected":"") }}>Kegalle</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="ag_office_division" class="form-label">Ag Office Division</label>
                                        <input type="text" class="form-control" id="ag_office_division" name="ag_office_division" value="{{$student->ag_office_division}}" placeholder="Enter ag office division">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="gs_office_division" class="form-label">Gs Office Division</label>
                                        <input type="text" class="form-control" id="gs_office_division" name="gs_office_division" value="{{$student->gs_office_division}}" placeholder="Enter gs office division">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea class="form-control" id="address" name="address" rows="4" placeholder="Enter Address...">{{$student->address}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="comment" class="form-label">Comments</label>
                                        <textarea class="form-control" name="comment" id="comment" rows="4" placeholder="Enter Comments...">{{$student->comment}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-dark mt-2"><i class="fa fa-refresh"></i> Update</button>
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