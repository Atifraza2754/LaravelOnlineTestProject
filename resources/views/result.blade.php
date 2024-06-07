@extends('main_layout')
@section('content')
<div class="result-container">
    <h1 class="text-center">Online Test Result</h1>
    <table class="table table-bordered result-table">
        <thead class="table-dark">
            <tr>
                <th>Total Questions</th>
                <th>Correct Questions</th>
                <th>Wrong Questions</th>
                <th>Obtained Marks</th>
                <th>Total Marks</th>
                <th>Percentage</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $fetch_result->total_question }}</td>
                <td>{{ $fetch_result->correct_question }}</td>
                <td>{{ $fetch_result->wrong_question }}</td>
                <td>{{ $fetch_result->obtain_marks }}</td>
                <td>{{ $fetch_result->total_marks }}</td>
                <td>{{ $fetch_result->percentage }}%</td>
            </tr>
        </tbody>
    </table>
    <div class="text-center">
        <h3 class="text-danger">Your Test Completed</h3>
        <a href="{{ url('') }}/download" class="btn btn-download">Download Result</a>
        {{-- <a href="{{ url('logout') }}" class="btn btn-logout">Logout</a> --}}
    </div>
</div>

@endsection
