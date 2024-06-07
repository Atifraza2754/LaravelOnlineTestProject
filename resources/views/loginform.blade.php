@extends('Login_layout') 

@section('content')

<div class="login-card">
    <h3 class="text-center mb-4">Student Login</h3>
    <form action="{{url('login_process')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="stemail" class="form-control" id="email" placeholder="name@example.com" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="stpass" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="d-grid gap-2">
            <button type="submit" name='st_login' class="btn login-btn btn-primary">Login</button>
           <button type="button" class="btn signup-btn btn-danger"> <a href="{{url('')}}/register">Sign Up</a></button>
        </div>
    </form>
</div>
@endsection


