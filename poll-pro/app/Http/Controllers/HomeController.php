<?php

namespace App\Http\Controllers;

use App\Models\Poll;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $polls = Poll::select('larapoll_polls.*')
        //     ->get();
        $polls = Poll::withCount('options', 'votes')->get();
        $data['polls'] = $polls;
        return view('home', $data);

        // Laravel SQL - more raw
        // $polls = DB::table('polls')
        //         ->selectRaw('*')
        //         ->get();

        //Pure SQL
        // SELECT * FROM `larapoll_polls`
    }
}
