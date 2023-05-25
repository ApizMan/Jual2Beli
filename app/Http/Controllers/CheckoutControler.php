<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutControler extends Controller
{
    public function index()
    {
        $checkout_data = \App\Models\Checkout::all();
        return view('livewire.Checkout.ViewCheck', ['checkout_data' => $checkout_data]);
    }

    public function create(Request $request){
        
        
        \App\Models\Checkout::create($request->all());
        return redirect('viewcheck')->with('success','New Data Insert');
    }
}
