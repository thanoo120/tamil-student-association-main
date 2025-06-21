@extends('layouts.main')
@section('p-title')
    Students
@endsection
@section('bread-item')
    students
@endsection
@section('main')
<div class="card p-3 shadow" style="font-weight:bold;">
    <table id="basic-datatable" class="table table-bordered table-sm-responsive dt-responsive nowrap w-100">
        <div class="mb-2">
            <a href="{{route('students.create')}}" class="btn btn-dark d"><i class="fa fa-plus"></i></a>
        </div>
        <thead>
            <tr style="color:#002B5B">
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Student Number</th>
                <th>Faculty</th>
                <th>District</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $key => $student)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$student->firstname}} {{$student->lastname}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->stu_number}}</td>
                <td>{{$student->grade}} {{$student->faculty}}</td>
                <td>{{$student->district}}</td>
                <td>
                    <a href="students/{{$student->id}}" class="btn-success text-white px-1 h4"><i class="fa fa-eye"></i></a>
                    <a href="students/{{$student->id}}/edit"  class="btn-warning text-white px-1 h4"><i class="fa fa-edit"></i></a>
                    <a onclick="deleteStudent({{$student->id}})"  class="btn-danger text-white px-1 h4"><i class="fa fa-trash"></i></a>
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

    function deleteStudent(id){
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
                    request(`{{URL::to('students/')}}`+"/"+id, 'DELETE', data, function(res){
                        window.location.reload();
                    });
                }
        });
    }
</script>
@endsection
