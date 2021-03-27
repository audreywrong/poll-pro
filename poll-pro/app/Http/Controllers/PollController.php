<?php

namespace App\Http\Controllers;

class PollController extends Controller
{

    public function view_details()
    {
        $polls = Poll::withCount('options', 'votes')->get()->map(function ($poll) {
            $poll->isRunning = $poll->isRunning();
            $poll->vote_link = route('poll.vote', $poll->id);
            return $poll;
        })->toArray();
        // return view('larapoll::dashboard.details', compact('polls'));
        return view('dashboard.details');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Create a poll
     */

    public function create()
    {
        return view('larapoll::dashboard.create');
    }

}
