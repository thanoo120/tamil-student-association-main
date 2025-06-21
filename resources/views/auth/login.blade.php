@extends('auth.include.app')
@section('title')
    Login
@endsection
@section('main')
@if ($errors->any())
    @foreach ($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
    @endforeach
@endif
<form action="{{route('login.action')}}" method="post" class="login-form">
  @csrf
  <div class="form-group">
    <input type="text" name="username" class="form-control rounded-left" placeholder="Username" />
  </div>
  <div class="form-group d-flex">
    <input type="password" name="password" class="form-control rounded-left" placeholder="Password" />
  </div>
  <div class="form-group text-center">
    <button type="submit" style="background-color: #c75c22" class="form-control text-white w-50 btn rounded submit px-3" >
      Login
    </button>
  </div>
  <div class="form-group d-md-flex">
    <div class="w-100 text-center">
      <a style="color: #8f431a" href="/">Forgot Password</a>
    </div>
  </div>
</form>
@endsection

@section('scripts')
<script>
    var succ = @json(session('success'));
    var err = @json(session('error'));
    if(succ){
        swal({
            title: "Success",
            text: succ,
            type: "success"
        });
    }

    if(err){
        swal({
            title: "Error",
            text: err,
            type: "error"
        });
    }
</script>
@endsection