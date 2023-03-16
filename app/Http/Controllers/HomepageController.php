<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function view(){
        //Active Order
        $activeorder  = new ActiveOrderCounter();
        $time = $activeorder->ActiveOrder();

        $session_email = session('userID');
        $transaction = transaction::where('userID','=',$session_email)->orderBy('created_at', 'desc')->first();
        $rowcount = 0;
        if($transaction != NULL)
        if($transaction->refID != NULL){
           if($transaction->status == "Pending")
           {
            $rowcount = transaction::where('status', '=', 'Pending')->where('refID','<',$transaction->refID)->count();
           }
           if($transaction->status == "Proccessing")
           {
            $rowcount = transaction::where('status', '=', 'Proccessing')->where('refID','<',$transaction->refID)->count();
           }
           if($transaction->status == "To Deliver")
           {
            $rowcount = transaction::where('status', '=', 'To Deliver')->where('refID','<',$transaction->refID)->count();
           }
        }
        $rowcount = $rowcount + 1;


        $pending = transaction::where('status','=',"Pending")->count();
        if($pending == NULL)
        {
            $pending = 0;
        }
        $proccessing = transaction::where('status','=',"Proccessing")->count();
        if($proccessing == NULL)
        {
            $proccessing = 0;
        }
        $todeliver = transaction::where('status','=',"To Deliver")->count();
        if($todeliver == NULL)
        {
            $todeliver = 0;
        }
        return view('homepage',['transaction'=>$time, 'pending'=>$pending, 'proccessing'=>$proccessing, 'todeliver'=>$todeliver, 'info'=>$transaction, 'rowcount'=>$rowcount]);
    }
}
