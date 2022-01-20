<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data_nunggak2010;
use App\data_nunggak2011;
use App\data_nunggak2012;
use App\data_nunggak2013;

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
    public function datanunggak()
    {
        $data_nunggak2010 = data_nunggak2010::get();
        $data_nunggak2011 = data_nunggak2011::get();
        $data_nunggak2012 = data_nunggak2012::get();
        $data_nunggak2013 = data_nunggak2013::get();
        return view(
            '/datanunggak.index',
            compact(
                'data_nunggak2010',
                'data_nunggak2011',
                'data_nunggak2012',
                'data_nunggak2013'
            )
        );
    }
}