<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Luggage;
use App\Emptycar;

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
        $data['luggage_num'] = session('luggage_num');
        $data['emptycar_num'] = session('emptycar_num');
        return view('pages.logged',$data);
    }
    public function register_check()
    {
        return view('pages.register_check');
    }

    
}

