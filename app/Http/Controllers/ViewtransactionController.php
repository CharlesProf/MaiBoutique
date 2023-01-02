<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewtransactionController extends Controller
{
    //
    public function view(){
        $transactions = Transaction::paginate(8);
        $detail = 0;
        return view('history')->with(compact('transactions'))->with('detail',$detail);
    }
}
