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
        $data = array('title' => 'Fitur');
        return view('admin/fitur',$data);
    }

    public function kategori()
    {
        $data = array('title' => 'Kategori');
        return view('admin/kategori',$data);
    }

    public function detail()
    {
        $data = array('title' => 'Web Detail');
        return view('admin/detail',$data);
    }

    public function slogan()
    {
        $data = array('title' => 'Slogan ');
        return view('admin/slogan',$data);
    }

    public function layanan()
    {
        $data = array('title' => 'Layanan Kami ');
        return view('admin/layanan',$data);
    }

    public function gambar()
    {
        $data = array('title' => 'Gambar ');
        return view('admin/gambar-pemanis',$data);
    }



}
