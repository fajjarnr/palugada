<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\Entertaiment;
use App\HomeCleaner;
use App\Laundry;
use App\LesPrivate;
use App\Massage;
use App\SelfBeauty;

class PaymentController extends Controller
{

    public function index()
    {
        $data = Entertaiment::all();
        $data = HomeCleaner::all();
        $data = Laundry::all();
        $data = LesPrivate::all();
        $data = Massage::all();
        $data = SelfBeauty::all();
        return view('payment', compact('data'));
    }

    public function payment()
    {
        $payments = Payment::get();
        $payments = json_decode(json_encode($payments));
        return view('admin.payment')->with(compact('payments'));
    }
}
