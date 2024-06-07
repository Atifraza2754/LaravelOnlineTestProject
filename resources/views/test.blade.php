@extends('main_layout')
@section('content')
<div class="question-container">
    <h1 class="text-center">Online Test</h1>
    <form action="{{ url('test') }}" method="POST" class="question-form">
        @csrf
        <div class="card question-card">
            <div class="card-body">
                <h2 class="question-text text-danger">Q:No{{$qid }}: {{ $question->question }}</h2>
                <ul class="list-group list-group-flush mb-4">
                    @foreach ($answers as $answer)
                        <li class="list-group-item option-item">
                            <input type='radio' name='op' value='{{ $answer->answer }}' class="me-2">{{ $answer->answer }}
                        </li>
                    @endforeach
                </ul>
                <input type='hidden' name='marks' value='{{ $marks }}'>
                <input type='hidden' name='qid' value='{{ $qid + 1 }}'>
                <input type='hidden' name='answerkey' value='{{ $question->correct_answer }}'>
                <div class="d-flex justify-content-center">
                    <button type='submit' class="btn btn-next">Next</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
