<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function index(){
        $title= 'welcom to laravel';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title',$title);//same think compact
    }
    public function about(){
       
        return view('pages.about');
    }
    public function services(){
        $data= array(
            'title'=>'services',
            'services'=>['web','programming','logic']
        );
        return view('pages.services')->with($data);
    }
    
}
