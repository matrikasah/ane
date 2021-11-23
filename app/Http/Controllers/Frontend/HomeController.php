<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
 
    public function index(){
    
        return view('frontend.pages.index');

    }

public function offshore_form(){

    return view('frontend.pages.apply-offshore');

}




}
