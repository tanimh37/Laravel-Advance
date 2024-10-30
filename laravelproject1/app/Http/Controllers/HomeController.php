<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $data = ['title'=>"Home Page", 'contant'=>'lorem ipsum'];
        $data['fruits'] = ["Mango" , "Banana" , "Orange" , "Komola" , "Grape"];
        return view('home', $data);
    }
    function about() {
        return view('about');
    }
    function contact() {
        return view('contact');
    }
}
