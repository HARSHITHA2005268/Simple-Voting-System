<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoteController extends Controller
{
    // Display voting page with candidates
    public function showCandidates()
    {
        // Dummy candidates data (in-memory, no DB)
        $candidates = [
            ['id' => 1, 'name' => 'Candidate A', 'party' => 'Party X', 'symbol' => '🌟'],
            ['id' => 2, 'name' => 'Candidate B', 'party' => 'Party Y', 'symbol' => '🔥'],
        ];



        // Check if user has voted
        $hasVoted = session()->has('voted');

        return view('vote', compact('candidates', 'hasVoted'));
    }

    // Handle the voting process
    public function vote(Request $request, $candidateId)
    {
        // Check if user has already voted
        if (session()->has('voted')) {
            return redirect()->route('vote')->with('error', 'You have already voted!');
        }

        // Store vote in session (in-memory)
        session()->put('voted', true);
        session()->put('vote', $candidateId);

        return redirect()->route('results')->with('success', 'Vote cast successfully!');
    }

    // Display the results page
    public function results()
    {
        // Dummy data for results (no database)
        $results = [
            '1' => 0, // Candidate A
            '2' => 0  // Candidate B
        ];

        // Update the results based on the vote in session
        if (session()->has('vote')) {
            $results[session()->get('vote')]++;
        }

        return view('results', compact('results'));
    }
}
