<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class PaymentController extends Controller
{
    public function payment()
    {
        $payments = Payment::get();
        $payments = json_decode(json_encode($payments));
        return view('admin.payment')->with(compact('payments'));
    }
}
