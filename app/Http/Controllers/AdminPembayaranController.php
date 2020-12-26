<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPembayaranController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        if (request()->user()->hasRole('adminPembayaran')) {
            return view('viewAdminPembayaran.homeAdPembayaran');
        } else {
            return redirect('/');
        } 
    }
}
