<?php

namespace App\Http\Controllers;

use App\Models\blog;

class AdminBlogController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function indexAdBlog()
    {
        if (request()->user()->hasRole('adminBlog')) {
            $totalblog = blog::whereNull('deleted_at')->get()->count('id');
            $page_title = 'Dashboard';
            $page_description = 'Some description for the page';
            $logo = "teamo/images/aisyacatering_kontak_logo.png";
            $logoText = "teamo/images/aisya-catering-logo3.png";
            $action = __FUNCTION__;
            return view('viewAdminBlog.homeAdBlog', compact('page_title', 'totalblog', 
            'page_description','action','logo','logoText'));
        } else {
            return redirect('/');
        } 
    }
}
