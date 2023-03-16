<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use Illuminate\Http\Request;

class ActiveOrderCounter extends Controller
{
    public function ActiveOrder()
    {
        $session_email = session('userID');

        $transactions = transaction::where('userID','=',$session_email)->latest()->first();
        if($transactions != NULL)
        {
            if($transactions->status == 'Cancelled')
            {

                    $time = "No Order";
            }
            else
            {
                $time = $transactions->prefferedTime;
            }
        }
        else
        {
            $time = "No Order";
        }

        return $time;
    }
}
