<!DOCTYPE html>
<html>
<head>
    <title>Vote</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #fbc2eb, #a6c1ee);
            color: #333;
            text-align: center;
            padding-top: 50px;
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        .candidate {
            background-color: #fff;
            padding: 20px;
            margin: 20px auto;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        form {
            margin-top: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }

        .alert {
            padding: 15px 25px;
            margin: 20px auto;
            border-radius: 8px;
            max-width: 500px;
            font-weight: bold;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .alert-success {
            background-color: #4caf50;
            color: white;
        }

        .alert-error {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>
<body>

    <h1>Vote for Your Favorite Candidate</h1>

    {{-- ✅ Session Messages --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-error">{{ session('error') }}</div>
    @endif

    {{-- Check if user has voted --}}
    @if($hasVoted)
        <div class="alert alert-error">You have already voted!</div>
    @else
        {{-- Display candidates --}}
        @foreach($candidates as $candidate)
            <div class="candidate">
                <h3>{{ $candidate['symbol'] }} {{ $candidate['name'] }}</h3>


                <p>Party: {{ $candidate['party'] }}</p>
                {{-- Add JavaScript confirmation --}}
                <form action="{{ route('vote.cast', $candidate['id']) }}" method="POST" onsubmit="return confirmVote()">
                    @csrf
                    <button type="submit">Vote</button>
                </form>
            </div>
        @endforeach
    @endif
<a href="{{ url('/') }}" style="display:inline-block; padding:10px 20px; background-color:#2196F3; color:white; border-radius:5px; text-decoration:none; margin-top:20px;">
    Go to Home
</a>

    <script>
        function confirmVote() {
            // Show a confirmation alert before submitting the form
            return window.confirm("Are you sure you want to cast your vote?");
        }
    </script>

</body>
</html>
