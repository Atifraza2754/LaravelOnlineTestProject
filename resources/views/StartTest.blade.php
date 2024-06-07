@extends('main_layout')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">Test Instructions</h3>
            <ul>
                <li>Test consists of 10 questions.</li>
                <li>Each question carries 2 marks.</li>
                <li>There is no negative marking.</li>
                <li>Passing percentage is required 50%.</li>
                <li>Test time is 20 minutes.</li>
            </ul>
            <div class="d-flex justify-content-center mt-4">
                <form action='{{ url("test") }}' method='POST'>
                    @csrf
                    <input type='hidden' name='op' value='null'>
                    <input type='hidden' name='answerkey' value=''>
                    <input type='hidden' name='qid' value='1'>
                    <input type='hidden' name='marks' value='0'>
                    <button type='submit' class="btn btn-primary btn-lg start-btn">Start Test</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
