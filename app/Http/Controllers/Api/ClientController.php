<?php

namespace App\Http\Controllers\Api;

use App\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function data()
    {
        $mydata = User::find(Auth::user()->id);

        return response()->json(compact('mydata'));
    }

    public function address()
    {
        $myaddresses = Address::where('user_id', Auth::user()->id)->get();

        return response()->json(compact('myaddresses'));
    }

    public function order()
    {
        $address = Address::where('user_id', Auth::user()->id)->pluck('id');

        $myorders = Order::whereIn('address_id', $address)->with(['address', 'product'])->get();

        return response()->json(compact('myorders'));
    }
}
