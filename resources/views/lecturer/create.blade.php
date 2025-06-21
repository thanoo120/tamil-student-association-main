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
                        <form action="{{ route('lecturers.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h5 class="mb-4 text-uppercase"> Add New Lecturer</h5>
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
                                        <label for="nic" class="form-label">NIC</label>
                                        <input type="text" class="form-control" id="nic" value="{{old('nic')}}" name="nic" placeholder="Enter nic">
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
                                        <label for="address" class="form-label">Address</label>
                                        <textarea class="form-control" id="address" name="address" rows="4" placeholder="Enter Address...">{{old('address')}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="bio" class="form-label">Bio</label>
                                        <textarea class="form-control" name="bio" id="bio" rows="4" placeholder="Enter Bio...">{{old('bio')}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-dark mt-2"><i class="mdi mdi-content-save"></i> Save</button>
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