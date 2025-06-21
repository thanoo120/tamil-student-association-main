@extends('layouts.main')
@section('p-title')
    Lecturers
@endsection
@section('bread-item')
    lecturers
@endsection
@section('main')
<div class="card p-3 shadow" style="font-weight:bold;">
    <table id="basic-datatable" class="table table-bordered table-sm-responsive dt-responsive nowrap w-100">
        <div class="mb-2">
            <a href="{{route('lecturers.create')}}" class="btn btn-dark d"><i class="fa fa-plus"></i></a>
        </div>
        <thead>
            <tr style="color:#002B5B">
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Phone</th>
                <th>District</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lecturers as $key => $lecturer)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$lecturer->firstname}} {{$lecturer->lastname}}</td>
                <td>{{$lecturer->gender}}</td>
                <td>{{$lecturer->email}}</td>
                <td>{{$lecturer->phone}}</td>
                <td>{{$lecturer->district}}</td>
                <td>
                    <a href="lecturers/{{$lecturer->id}}" class="btn-success text-white px-1 h4"><i class="fa fa-eye"></i></a>
                    <a href="lecturers/{{$lecturer->id}}/edit"  class="btn-warning text-white px-1 h4"><i class="fa fa-edit"></i></a>
                    <a onclick="deleteLecturer({{$lecturer->id}})"  class="btn-danger text-white px-1 h4"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('scripts')
<script>
    var success = @json(Session::get('success'));
    if(success){
        swal({
            title: "Success",
            text: success,
            type: "success"
        });
    }

    function deleteLecturer(id){
        data = {
            id: id,
        }

        Swal.fire({
            title: 'Confirmation',
            text: "Are you sure that you want to delete?",
            type: 'warning',
            showCancelButton: true,
            confirmButton: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.value) {
                    request(`{{URL::to('lecturers/')}}`+"/"+id, 'DELETE', data, function(res){
                        window.location.reload();
                    });
                }
        });
    }
</script>
@endsection
