<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcom to Larablog';
        return view('pages.index')->with('title',$title);
    }
    
    public function about(){ 
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
        }

        public function service(){
            $data = array(
                'title'=> 'Our Service',
                'services'=>['AAAAAA','BBBBBB','CCCCCC']
            ); 
            return view('pages.service')->with($data);
            }

    }


