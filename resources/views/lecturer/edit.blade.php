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
                        <form action="{{ route('lecturers.update', $lecturer->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PATCH') 
                            @csrf
                            <h5 class="mb-4 text-uppercase"> Update Lecturer</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname" value="{{$lecturer->firstname}}" placeholder="Enter first name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname" value="{{$lecturer->lastname}}" placeholder="Enter last name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{$lecturer->email}}" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" value="{{$lecturer->phone}}" name="phone" placeholder="Enter phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nic" class="form-label">NIC</label>
                                        <input type="text" class="form-control" id="nic" value="{{$lecturer->nic}}" name="nic" placeholder="Enter nic">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="dob" class="form-label">DOB</label>
                                        <input type="text" class="form-control" id="dob" value="{{ date('m/d/y',strtotime($lecturer->dob)) }}" name="dob" placeholder="Enter dob">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select class="form-select" name="gender" id="gender" aria-label="Default select example">
                                            <option value="">[Select Gender]</option>
                                            <option value="Male" {{ ($lecturer->gender == "Male" ? "selected":"") }}>Male</option>
                                            <option value="Female" {{ ($lecturer->gender == "Female" ? "selected":"") }}>Female</option>
                                            <option value="Other" {{ ($lecturer->gender == "Other" ? "selected":"") }}>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="district" class="form-label">District</label>
                                        <select class="form-select" name="district" id="district" aria-label="Default select example">
                                            <option value="">[Select District]</option>
                                            <option value="Jaffna" {{ ($lecturer->district == "Jaffna" ? "selected":"") }}>Jaffna</option>
                                            <option value="Colombo" {{ ($lecturer->district == "Colombo" ? "selected":"") }}>Colombo</option>
                                            <option value="Gampaha" {{ ($lecturer->district == "Gampaha" ? "selected":"") }}>Gampaha</option>
                                            <option value="Kalutara" {{ ($lecturer->district == "Kalutara" ? "selected":"") }}>Kalutara</option>
                                            <option value="Kandy" {{ ($lecturer->district == "Kandy" ? "selected":"") }}>Kandy</option>
                                            <option value="Matale" {{ ($lecturer->district == "Matale" ? "selected":"") }}>Matale</option>
                                            <option value="Nuwara Eliya" {{ ($lecturer->district == "Nuwara Eliya" ? "selected":"") }}>Nuwara Eliya</option>
                                            <option value="Galle" {{ ($lecturer->district == "Galle" ? "selected":"") }}>Galle</option>
                                            <option value="Matara" {{ ($lecturer->district == "Matara" ? "selected":"") }}>Matara</option>
                                            <option value="Hambantota" {{ ($lecturer->district == "Hambantota" ? "selected":"") }}>Hambantota</option>
                                            <option value="Kilinochchi" {{ ($lecturer->district == "Kilinochchi" ? "selected":"") }}>Kilinochchi</option>
                                            <option value="Mannar" {{ ($lecturer->district == "Mannar" ? "selected":"") }}>Mannar</option>
                                            <option value="Vavuniya" {{ ($lecturer->district == "Vavuniya" ? "selected":"") }}>Vavuniya</option>
                                            <option value="Mullaitivu" {{ ($lecturer->district == "Mullaitivu" ? "selected":"") }}>Mullaitivu</option>
                                            <option value="Batticaloa" {{ ($lecturer->district == "Batticaloa" ? "selected":"") }}>Batticaloa</option>
                                            <option value="Ampara" {{ ($lecturer->district == "Ampara" ? "selected":"") }}>Ampara</option>
                                            <option value="Trincomalee" {{ ($lecturer->district == "Trincomalee" ? "selected":"") }}>Trincomalee</option>
                                            <option value="Kurunegala" {{ ($lecturer->district == "Kurunegala" ? "selected":"") }}>Kurunegala</option>
                                            <option value="Puttalam" {{ ($lecturer->district == "Puttalam" ? "selected":"") }}>Puttalam</option>
                                            <option value="Anuradhapura" {{ ($lecturer->district == "Anuradhapura" ? "selected":"") }}>Anuradhapura</option>
                                            <option value="Polonnaruwa" {{ ($lecturer->district == "Polonnaruwa" ? "selected":"") }}>Polonnaruwa</option>
                                            <option value="Badulla" {{ ($lecturer->district == "Badulla" ? "selected":"") }}>Badulla</option>
                                            <option value="Moneragala" {{ ($lecturer->district == "Moneragala" ? "selected":"") }}>Moneragala</option>
                                            <option value="Ratnapura" {{ ($lecturer->district == "Ratnapura" ? "selected":"") }}>Ratnapura</option>
                                            <option value="Kegalle" {{ ($lecturer->district == "Kegalle" ? "selected":"") }}>Kegalle</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea class="form-control" id="address" name="address" rows="4" placeholder="Enter Address...">{{$lecturer->address}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="bio" class="form-label">Bio</label>
                                        <textarea class="form-control" name="bio" id="bio" rows="4" placeholder="Enter Bio...">{{$lecturer->bio}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-dark mt-2"><i class="fa fa-refresh"></i> Update</button>
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