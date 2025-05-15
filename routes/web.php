<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoteController;

Route::get('/', function () {
    return view('welcome'); // Laravel default page
});
Route::get('/', function () {
    return view('home');
});

// Voting routes
Route::get('/vote', [VoteController::class, 'showCandidates'])->name('vote');
Route::post('/vote/{candidateId}', [VoteController::class, 'vote'])->name('vote.cast');
Route::get('/results', [VoteController::class, 'results'])->name('results');

// ✅ Add this reset route at the end for testing purpose
Route::get('/reset-vote', function () {
    session()->flush();
    return redirect('/vote')->with('success', 'Session reset. You can vote again.');
});
