<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\transaction;
use Illuminate\Http\Request;

class viewTransactionController extends Controller
{

    public function View (){
        $session_email = session('userID');

        $history = transaction::where('userID','=',$session_email)->orderBy('created_at', 'desc')->get();

        $activeorder  = new ActiveOrderCounter();
        $time = $activeorder->ActiveOrder();

        return view('viewtransaction',['history'=>$history, 'transaction'=>$time]);
    }
}
