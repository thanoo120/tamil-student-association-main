@extends('layouts.main')
@section('p-title')
    Competitions
@endsection
@section('bread-item')
    competitions
@endsection
@section('main')
<div class="card p-3 shadow" style="font-weight:bold;">
    <table id="basic-datatable" class="table table-bordered table-sm-responsive dt-responsive nowrap w-100">
        <div class="mb-2">
            <a href="{{route('competitions.create')}}" class="btn btn-dark d"><i class="fa fa-plus"></i></a>
        </div>
        <thead>
            <tr style="color:#002B5B">
                <th>#</th>
                <th>Posted By</th>
                <th>Heading</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($competitions as $key => $competition)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$competition->added_by}}</td>
                <td>{{$competition->heading}}</td>
                <td>
                    <a href="competitions/{{$competition->id}}" class="btn-success text-white px-1 h4"><i class="fa fa-eye"></i></a>
                    <a href="competitions/{{$competition->id}}/edit"  class="btn-warning text-white px-1 h4"><i class="fa fa-edit"></i></a>
                    <a onclick="deleteCompetition({{$competition->id}})"  class="btn-danger text-white px-1 h4"><i class="fa fa-trash"></i></a>
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

    function deleteCompetition(id){
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
                    request(`{{URL::to('competitions/')}}`+"/"+id, 'DELETE', data, function(res){
                        window.location.reload();
                    });
                }
        });
    }
</script>
@endsection
