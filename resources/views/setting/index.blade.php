@extends('layouts.main')
@section('p-title')
    Settings
@endsection
@section('bread-item')
    settings
@endsection
@section('main')
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow">
            <div class="card-body">
                <div class="tab-pane">
                    <form action="" method="POST">
                        @csrf
                        @if ($setting)
                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-box me-1"></i> Contact Details</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="mdi mdi-cellphone"></i></span>
                                        <input type="text" class="form-control" onchange="updateSetting({{$setting->id}})" value="{{$setting->phone}}" id="phone" name="phone" placeholder="Enter phone">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="mdi mdi-gmail"></i></span>
                                        <input type="email" class="form-control" onchange="updateSetting({{$setting->id}})" value="{{$setting->email}}" id="email" name="email" placeholder="Enter email">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="mdi mdi-facebook"></i></span>
                                        <input type="text" class="form-control" id="facebook" onchange="updateSetting({{$setting->id}})" value="{{$setting->facebook}}" name="facebook" placeholder="Enter url">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="twitter" class="form-label">Twitter</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="mdi mdi-twitter"></i></span>
                                        <input type="text" class="form-control" id="twitter" onchange="updateSetting({{$setting->id}})" value="{{$setting->twitter}}" name="twitter" placeholder="Enter url">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="instagram" class="form-label">Instagram</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="mdi mdi-instagram"></i></span>
                                        <input type="text" class="form-control" id="instagram" onchange="updateSetting({{$setting->id}})" value="{{$setting->instagram}}" name="instagram" placeholder="Enter url">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="linkedin" class="form-label">Linkedin</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="mdi mdi-linkedin"></i></span>
                                        <input type="text" class="form-control" id="linkedin" onchange="updateSetting({{$setting->id}})" value="{{$setting->linkedin}}" name="linkedin" placeholder="Enter url">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building me-1"></i> Union Info</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="about_left" class="form-label">About Left</label>
                                    <textarea class="form-control" id="about_left" name="about_left" onchange="updateSetting({{$setting->id}})" value="{{$setting->about_left}}" rows="4" placeholder="Write About...">{{$setting->about_left}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="about_right" class="form-label">About Right</label>
                                    <textarea class="form-control" name="about_right" id="about_right" rows="4" onchange="updateSetting({{$setting->id}})" value="{{$setting->about_right}}" placeholder="Write About...">{{$setting->about_right}}</textarea>
                                </div>
                            </div>
                        </div>
                        @endif
                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-multiple me-1"></i> Students Info</h5>
                        @foreach ($faculties as $faculty)
                        <h5 class="mb-3 text-uppercase bg-light p-2 text-center">{{$faculty->name}}</h5>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="boys{{$faculty->id}}" class="form-label">Boys</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="mdi mdi-gender-male"></i></span>
                                        <input type="number" min="0" onchange="updateFaculty({{$faculty->id}})" class="form-control" id="boys{{$faculty->id}}" value="{{$faculty->boys}}" name="boys{{$faculty->id}}" placeholder="Enter count of boys">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="girls{{$faculty->id}}" class="form-label">Girls</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="mdi mdi-gender-female"></i></span>
                                        <input type="number" min="0" onchange="updateFaculty({{$faculty->id}})" class="form-control" id="girls{{$faculty->id}}" value="{{$faculty->girls}}" name="girls{{$faculty->id}}" placeholder="Enter count of girls">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="total{{$faculty->id}}" class="form-label">Total</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="mdi mdi-account-multiple"></i></span>
                                        <input type="text" readonly class="form-control" id="total{{$faculty->id}}" value="{{$faculty->total}}" name="total{{$faculty->id}}" placeholder="Enter count of total students">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>    
        function updateSetting(id){
            var data = {};
            var sid = id;
            var type = 'setting';
            var phone = $('#phone').val();
            var email = $('#email').val();
            var facebook = $('#facebook').val();
            var instagram = $('#instagram').val();
            var twitter = $('#twitter').val();
            var linkedin = $('#linkedin').val();
            var about_left = $('#about_left').val();
            var about_right = $('#about_right').val();

            data = {
                sid: sid,
                type: type,
                phone: phone,
                email: email,
                facebook: facebook,
                twitter: twitter,
                instagram: instagram,
                linkedin: linkedin,
                about_right: about_right,
                about_left: about_left,
            }

            request(`{{URL::to('settings/setting')}}`, 'POST', data, function(res){
                var msg = @json(Session::get('msg'));
                if(res.data.is_success){
                    swal({
                        title: "Success",
                        text: "Setting has been successfully saved",
                        type: "success"
                    });
                }
                if(msg){
                    swal({
                        title: "Error",
                        text: msg,
                        type: "error"
                    });
                }
            });
        }

        function updateFaculty(id){
            var faculty = {};
            var type = 'faculty';
            var boys = $('#boys'+id).val();
            var girls = $('#girls'+id).val();
            var total = (parseInt(boys) + parseInt(girls));
            $('#total'+id).val(total);
            
            faculty = {
                sid: id,
                type: type,
                boys: boys,
                girls: girls,
                total: total,
            }

            request(`{{URL::to('settings/setting')}}`, 'POST', faculty, function(res){
                var msg = @json(Session::get('msg'));
                if(res.data.is_success){
                    swal({
                        title: "Success",
                        text: "Students info has been successfully saved",
                        type: "success"
                    });
                }
                if(msg){
                    swal({
                        title: "Error",
                        text: msg,
                        type: "error"
                    });
                }
            });
        }
    </script>
@endsection