<?php

namespace App\Http\Controllers;

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
    // public function index()
    // {
    //     return view('home');
    // }

    public function index(Request $request)
    {
  
        if ($request->user()->hasRole('user')) {
            return redirect('/user');
        }

        if ($request->user()->hasRole('adminPemesanan')){
            return redirect('/adminPemesanan');
        }

        if ($request->user()->hasRole('adminPembayaran')){
            return redirect('/adminPembayaran');
        }
 
        if ($request->user()->hasRole('superAdmin')){
            return redirect('/superAdmin');
        }
 
 
    }
}
