<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\transaction;
use Illuminate\Http\Request;

class adminController extends Controller
{

    public function View (){

        $customer_data = transaction::latest()->take(15)->get();


        return view('admin',['recent'=>$customer_data]);
    }
}
