<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function success()
    {
        Session::flash('message', 'This is a message!'); 
        Session::flash('alert-class', 'alert-danger'); 
        return view('pages.dashboard');
    }
}
