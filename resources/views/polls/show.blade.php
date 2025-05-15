<h1>{{ $poll->question }}</h1>

<form method="POST" action="/poll/{{ $poll->id }}/vote">
    @csrf
    @foreach($poll->options as $index => $option)
        <label>
            <input type="radio" name="option" value="{{ $index }}" required>
            {{ $option }}
        </label><br>
    @endforeach
    <button type="submit">Vote</button>
</form>

@if($poll->votes)
    <h3>Results:</h3>
    @foreach($poll->options as $index => $option)
        {{ $option }} - {{ $poll->votes[$index] ?? 0 }} votes<br>
    @endforeach
@endif

<a href="/">Back to list</a>
