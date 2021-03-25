<?php

namespace App\Http\Controllers;

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
        $polls = "Hello World";
        $data['polls'] = $polls; // define the variable to be sent to the view
        // $this->load->view('templates/template_student', $data);
        return view('home', $data);
    }
}
