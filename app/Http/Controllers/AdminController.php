<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function login(){
        return view('templates.admin.login');
    }

    public function index(){
        $side = 1;
        if(Auth::user())
            return view('templates.admin.pages.dashboard',compact('side'));
        return redirect('admin/login');
    }

    public function message(){
        $side = 2;
        if(Auth::user())
            return view('templates.admin.pages.message',compact('side'));
        return redirect('admin/login');
    }
}
