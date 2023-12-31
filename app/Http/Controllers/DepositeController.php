<?php

namespace App\Http\Controllers;
use App\Models\Deposit;
use App\Models\User;
use App\Notifications\DepositSuccessful;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DepositeController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

    public function deposit(Request $request){
        $deposit = Deposit::create([

            'user_id' =>Auth::user()->id,
            'amount'  => $request->amount,
            'name'=>$request->name,
            'rank'=>$request->rank,
            'subject'=>$request->subject,
        ]);
        User::find(Auth::user()->id)->notify(new DepositSuccessful($deposit->amount));
     
        return redirect()->back()->with('status','Congratulations!!!! Your deposit was successful.');
    }

    public function markAsRead(){
        Auth::user()->unreadNotifications->markAsRead();
        return redirect()->back();
    }

}
