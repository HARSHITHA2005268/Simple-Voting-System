<h1>Polls</h1>
<ul>
@foreach($polls as $poll)
    <li><a href="/poll/{{ $poll->id }}">{{ $poll->question }}</a></li>
@endforeach
</ul>
