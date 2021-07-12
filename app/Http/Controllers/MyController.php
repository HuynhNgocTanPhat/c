<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
       return view('giaodienchinh.index');
    }
    public function menu()
    {
       return view('giaodienchinh.menu');
    }
    public function about()
    {
       return view('giaodienchinh.about');
    }
    public function gallery()
    {
       return view('giaodienchinh.gallery');
    }
    public function reservation()
    {
       return view('giaodienchinh.reservation');
    }

    public function stuff()
    {
       return view('giaodienchinh.stuff');
    }
    public function contact()
    {
       return view('giaodienchinh.contact');
    }
    public function blog()
    {
       return view('giaodienchinh.blog');
    }
    public function blogDetail()
    {
       return view('giaodienchinh.blogDetail');
    }
}
