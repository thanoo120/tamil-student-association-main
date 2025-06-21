@extends('layouts.main')
@section('p-title')
    Years
@endsection
@section('bread-item')
    years
@endsection
@section('main')
<div class="card p-3 shadow" style="font-weight:bold;">
    <table id="basic-datatable" class="table table-bordered table-sm-responsive dt-responsive nowrap w-100">
        <div class="mb-2">
            <a href="{{route('years.create')}}" class="btn btn-dark d"><i class="fa fa-plus"></i></a>
        </div>
        <thead>
            <tr style="color:#002B5B">
                <th>#</th>
                <th>Added By</th>
                <th>Year</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($years as $key => $year)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$year->added_by}}</td>
                <td>{{$year->year}}</td>
                <td>
                    <a href="years/{{$year->id}}" class="btn-success text-white px-1 h4"><i class="fa fa-eye"></i></a>
                    <a href="years/{{$year->id}}/edit"  class="btn-warning text-white px-1 h4"><i class="fa fa-edit"></i></a>
                    <a onclick="deleteBatch({{$year->id}})"  class="btn-danger text-white px-1 h4"><i class="fa fa-trash"></i></a>
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

    function deleteBatch(id){
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
                    request(`{{URL::to('years/')}}`+"/"+id, 'DELETE', data, function(res){
                        window.location.reload();
                    });
                }
        });
    }
</script>
@endsection
