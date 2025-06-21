@extends('layouts.main')
@section('p-title')
    Notice
@endsection
@section('bread-item')
    notice
@endsection
@section('main')
<div class="card shadow">
    <div class="row">
        <div class="col-12">
            <div class="card-body">
                <div>
                    <div class="tab-pane">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="notice" class="form-label">Notice</label>
                                        <textarea class="form-control" readonly id="notice" name="notice" rows="4" placeholder="Enter Notice...">{{$notice->notice}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" readonly id="description" name="description" rows="4" placeholder="Enter description...">{{$notice->description}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <a href="/notice" class="btn btn-dark mt-2"><i class="fa fa-arrow-left"></i> Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection