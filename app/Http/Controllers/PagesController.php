<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PagesController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('guest');
    //     $this->middleware('log')->only('index');
    //     $this->middleware('subscribed')->except('store');
    // }
   public function index(){
       return view('pages.index');
   }




}
