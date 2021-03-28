<?php

namespace App\Http\Controllers;

use App\Models\Poll;

class PollController extends Controller
{

    public function view_details()
    {
        // $polls = "Hello World!";
        $polls = Poll::withCount('options', 'votes')->get()->map(function ($poll) {
            $poll->isRunning = $poll->isRunning();
            $poll->vote_link = route('poll.vote', $poll->id);
            return $poll;
        })->toArray();
        $poll = Poll::find(2);
        $data['poll'] = $poll;
        // return view('dashboard.details', compact('poll'));
        return view('dashboard.details', $data);
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
