{{-- @include("login_header");
 --}}
 <body class="Mainbody">
    @extends('Login_layout')
    @section('content')
    <div class="wrapper">
        <div class="regbody">
            <h1 class="text-center mb-4">Student Registration</h1>
            <form action="{{url('register_student')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="stname" class="form-label">Student Name</label>
                    <input type="text" class="form-control" id="stname" name="stname" placeholder="Student Name" required>
                </div>
                <div class="mb-3">
                    <label for="strollno" class="form-label">Roll No</label>
                    <input type="text" class="form-control" id="strollno" name="strollno" placeholder="Roll No" required>
                </div>
                <div class="mb-3">
                    <label for="stage" class="form-label">Age</label>
                    <input type="text" class="form-control" id="stage" name="stage" placeholder="Age">
                </div>
                <div class="mb-3">
                    <label for="stcnic" class="form-label">CNIC</label>
                    <input type="text" class="form-control" id="stcnic" name="stcnic" placeholder="CNIC" required>
                </div>
                <div class="mb-3">
                    <label for="stemail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="stemail" name="stemail" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <label for="stpass" class="form-label">Password</label>
                    <input type="password" class="form-control" id="stpass" name="stpass" placeholder="Password" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn register">Register</button>
                </div>
            </form>
        </div>
    </div>
    @endsection

</body>
</html>

