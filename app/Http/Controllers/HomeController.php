<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
    {
        return view('main.about');
    }
    public function service()
    {
        return view('main.services');
    }
    public function project()
    {
        return view('project');
    }
    public function blog()
    {
        return view('main.blog');
    }
    public function contact()
    {
        return view('main.contact');
    }
}
