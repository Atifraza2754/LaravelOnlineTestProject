<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\students;
use App\Models\Question;
use App\Models\answer;
use App\Models\result;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function login(){
        return view('loginform');
    }

    public function register(){
        return view('registerform');
    }

    public function register_student(Request $request){
        
        $add = new students();
        
        $add->StName = $request->stname;
        $add->StRollNo = $request->strollno;
        $add->StAge = $request->stage;
        $add->StCnic = $request->stcnic;
        $add->StEmail = $request->stemail;
        $add->StPassword = $request->stpass;

        $add->save();
        return redirect()->route('login');
    }

    public function login_process(Request $request){
        $stemail = $request->stemail;
        $stpass = $request->stpass;

        $data = students::where('StEmail', $stemail)->where('StPassword', $stpass)->first();

        if ($data) {
            Session::put('user_id', $data->id); // Store user id in session
            //return view('StartTest');
            return redirect()->route('Start');
        } else {
            return redirect()->route('register');
        }
    }

    public function start(){
        return view('StartTest');
    }

    public function test(Request $request)
    {
        session_start();
        $qid = $request->input('qid', 1);
        $marks = $request->input('marks', 0);
        $op = $request->input('op');
        $answerkey = $request->input('answerkey');

        if ($op == $answerkey) {
            $marks += 2;
        }

        $question = Question::where('id', $qid)->first();
        $answers = answer::where('question_id', $qid)->get();

        if (!$question) {
            $totalquestion = $qid - 1;
            $correctquestion = $marks / 2;
            $wrong_question = $totalquestion - $correctquestion;
            $totalmarks = $totalquestion * 2;
            $obtain_marks = $correctquestion * 2;
            $per = ($marks / $totalmarks) * 100;
            $user_id = Session::get('user_id');

            $attempt_query = result::where('user_id', $user_id)->get();
            $getattempt = $attempt_query->count() + 1;

            $data = new result();
            $data->user_id = $user_id; // Use session user_id
            $data->user_attempt = $getattempt; 
            $data->total_question = $totalquestion; 
            $data->correct_question = $correctquestion; 
            $data->wrong_question = $wrong_question; 
            $data->total_marks = $totalmarks; 
            $data->obtain_marks = $obtain_marks; 
            $data->percentage = $per; 

            $data->save(); // Save the result

            $fetch_result = result::where('user_id', $user_id)->latest()->first();
            return view('result', compact('fetch_result'));
        }

        return view('test', compact('question', 'answers', 'qid', 'marks', 'answerkey'));
    }

    public function download()
    {
        $user_id = Session::get('user_id'); // Retrieve user ID from session
        $fetch_result = result::where('user_id', $user_id)->latest()->first(); // Fetch the latest result for the user

        $pdf = Pdf::loadView('PrintResult', compact('fetch_result'));
        return $pdf->download('StudentResult.pdf');
    }
}
