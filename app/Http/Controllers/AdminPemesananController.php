<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPemesananController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        if (request()->user()->hasRole('adminPemesanan')) {
            return view('viewAdminPemesanan.homeAdPemesanan');
        } else {
            return redirect('/');
        } 
    }
}
