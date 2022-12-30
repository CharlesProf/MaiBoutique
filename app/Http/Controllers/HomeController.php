<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function showWelcomePage(){
        return view('welcome');
    }

    public function showHomePage(){
        return view('home');
    }

    public function showHistoryPage(){
        return view('history');
    }

    public function showCartPage(){
        return view('cart');
    }

}
