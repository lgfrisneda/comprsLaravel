<?php

namespace App\Http\Controllers;

use App\Address;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function data()
    {
        $mydata = User::find(Auth::user()->id);

        return view('client.index', compact('mydata'));
    }

    public function address()
    {
        $myaddresses = Address::where('user_id', Auth::user()->id)->get();

        return view('client.address', compact('myaddresses'));
    }

    public function order()
    {
        $address = Address::where('user_id', Auth::user()->id)->pluck('id');

        $myorders = Order::whereIn('address_id', $address)->get();

        return view('client.orders', compact('myorders'));
    }
}
