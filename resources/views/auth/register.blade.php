@extends('auth.include.app')
@section('title')
    register
@endsection
@section('main')
    @if ($errors->any())
        @foreach ($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
    @endif
    @if(session('error'))
        <p class="alert alert-danger">{{ session('error') }}</p>
    @endif
    <form action="{{route('register.action')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name">Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{old('name')}}">
        </div>
        <div class="mb-3">
            <label for="email">Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{old('email')}}">
        </div>
        <div class="mb-3">
            <label for="phone">Phone <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone" value="{{old('phone')}}">
        </div>
        <div class="mb-3">
            <label for="designation">Designation <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="designation" id="designation" placeholder="Enter designation" value="{{old('designation')}}">
        </div>
        <div class="mb-3">
            <label for="username">Username <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" value="{{old('username')}}">
        </div>
        <div class="mb-3">
            <label for="password">Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
        </div>
        <div class="mb-3">
            <label for="cpassword">Confirm Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Enter confirm password">
        </div>
        <div class="form-group text-center">
            <button type="submit" style="background-color: #c75c22" class="form-control text-white w-50 btn rounded submit px-3" >
              Register
            </button>
        </div>
        <div class="form-group d-md-flex">
            <div class="w-100 text-center">
              <a style="color: #8f431a" href="{{route('login')}}">Login</a>
            </div>
        </div>
    </form>
@endsection