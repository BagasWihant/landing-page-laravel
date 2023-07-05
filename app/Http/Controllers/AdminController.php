<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = array('title' => 'Admin');
        return view('admin/home',$data);
    }
    public function fitur()
    {
        $data = array('title' => 'fitur');
        return view('admin/fitur',$data);
    }
}
