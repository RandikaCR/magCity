<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Request $request){
        return view('frontend.index');
    }

    public function aboutUs(Request $request){
        return view('frontend.about-us');
    }

    public function services(Request $request){
        return view('frontend.services');
    }

    public function ourStandard(Request $request){
    return view('frontend.our-standard');
}
}
