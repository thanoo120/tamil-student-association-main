@extends('layouts.main')
@section('p-title')
    Contacts
@endsection
@section('bread-item')
    contacts
@endsection
@section('main')
<div class="card p-3 shadow" style="font-weight:bold;">
    <table id="basic-datatable" class="table table-striped table-bordered dt-responsive nowrap w-100">
        <thead>
            <tr style="color:#002B5B">
                <th>#</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $key => $contact)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->subject}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->phone}}</td>
                <td>
                    <a href="contacts/{{$contact->id}}" class="btn-success text-white px-1 h4"><i class="fa fa-eye"></i></a>
                    <a onclick="deleteContact({{$contact->id}})"  class="btn-danger text-white px-1 h4"><i class="fa fa-trash"></i></a>
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

    function deleteContact(id){
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
                    request(`{{URL::to('contacts/')}}`+"/"+id, 'DELETE', data, function(res){
                        window.location.reload();
                    });
                }
        });
    }
</script>
@endsection