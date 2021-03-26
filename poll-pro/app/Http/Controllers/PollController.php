<?php

namespace App\Http\Controllers;

class PollController extends Controller
{
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
        return view('home');
    }

}
