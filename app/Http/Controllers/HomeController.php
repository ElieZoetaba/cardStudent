<?php

namespace App\Http\Controllers;

use index;
use Illuminate\Http\Request;

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
        return view('home');
    }

    public function secretary()
    {
        return view('livewire.secretary');
    }

    public function director()
    {
        return view('home');
    }

    public function student()
    {
        return view('livewire.student');
    }

    public function table()
    {
        return view('livewire.table');
    }

    public function card()
    {
        return view('livewire.card');
    }

}
