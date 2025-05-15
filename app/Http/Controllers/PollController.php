<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poll;

class PollController extends Controller
{
    public function index()
    {
        $polls = Poll::all();
        return view('polls.index', compact('polls'));
    }

    public function show($id)
    {
        $poll = Poll::findOrFail($id);
        return view('polls.show', compact('poll'));
    }

    public function vote(Request $request, $id)
    {
        $poll = Poll::findOrFail($id);

        $votes = $poll->votes ?? array_fill(0, count($poll->options), 0);

        $votes[$request->option] += 1;

        $poll->votes = $votes;
        $poll->save();

        return redirect()->back()->with('success', 'Vote submitted!');
    }
}
