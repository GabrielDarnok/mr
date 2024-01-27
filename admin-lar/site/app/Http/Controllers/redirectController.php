<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class redirectController extends Controller
{
    public function index () {
        
        return view('index');
   
    }
    public function charts () {
        
        return view('charts');
   
    }

    public function buttons () {
        
        return view('buttons');
   
    }

    public function tables () {
        
        return view('tables');
   
    }

    public function cards () {
        
        return view('cards');
   
    }

    public function NotFound () {
        
        return view('404');
   
    }

    public function utilitiesColor () {
        
        return view('utilities-color');
   
    }

    public function utilitiesBorder () {
        
        return view('utilities-border');
   
    }

    public function utilitiesAnimation () {
        
        return view('utilities-animation');
   
    }

    public function utilitiesOther () {
        
        return view('utilities-other');
   
    }

    public function blank () {
        
        return view('blank');
   
    }
}
