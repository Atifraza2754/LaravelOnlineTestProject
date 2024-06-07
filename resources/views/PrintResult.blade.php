<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet"> 


    <style>
        .result-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 30px;
        }
        .result-table {
            width: 80%;
            margin-bottom: 30px;
            background-color: skyblue;
            font-size: larger;
            font-weight: bold;
        }
        .result-table th, .result-table td {
            text-align: center;
            padding: 15px;
        }
    
    </style>
</head>
<body>
    
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
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>

