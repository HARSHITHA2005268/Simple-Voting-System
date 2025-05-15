@extends('layouts.app')

@section('title', 'Voting Results')

@section('content')
    <h1>Voting Results</h1>

    <div class="candidate">
        <p>Candidate A: {{ $results['1'] }} vote(s)</p>
        <p>Candidate B: {{ $results['2'] }} vote(s)</p>
    </div>

    <div class="button-group">
        <a href="{{ url('/reset-vote') }}" class="btn btn-reset">
            Reset Vote & Vote Again
        </a>
        <a href="{{ url('/') }}" class="btn btn-home">
            Go to Home
        </a>
    </div>

@endsection

@section('styles')
    <style>
        .button-group {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .btn {
            padding: 12px 25px;
            border-radius: 5px;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-reset {
            background-color: #f44336;
            color: white;
        }

        .btn-reset:hover {
            background-color: #d32f2f;
            transform: scale(1.05);
        }

        .btn-home {
            background-color: #2196F3;
            color: white;
        }

        .btn-home:hover {
            background-color: #1976d2;
            transform: scale(1.05);
        }
    </style>
@endsection
