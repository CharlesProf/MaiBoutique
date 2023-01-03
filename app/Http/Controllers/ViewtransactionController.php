<?php

namespace App\Http\Controllers;

use App\Models\TransactionHeader;
use Illuminate\Http\Request;

class ViewtransactionController extends Controller
{
    //
    public function view(){

        if (! TransactionHeader::first()){
            session()->flash('message', 'You have not made any transactions yet');
            return view('history');
        }

        $transactions = TransactionHeader::paginate(8);
        $detail = 0;
        return view('history')->with(compact('transactions'))->with('detail',$detail);
    }
}
