<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function sejarah(){
        return view('frontend.sejarah');
    }

    public function article(){
        return view('frontend.article');
    }

    public function detailarticle(){
        return view('frontend.detailarticle');
    }
}
