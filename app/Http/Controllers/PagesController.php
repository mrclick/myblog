<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to Mr.Click";
        return view('pages.index', compact('title'));
    }
    public function about(){
        $title = "About Mr Click";
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        $data = array(
            'title' => 'Mr Click Services',
            'services' => ['Web Design','Web Hosting','Apps Development']
        );
        return view('pages.services')->with($data);
    }
    public function media(){
        $title = "Media Center";
        return view('pages.media')->with('title',$title);
    }
    public function contact(){
        $title = "Contact Me";
        return view('pages.contact')->with('title',$title);
    }
}
