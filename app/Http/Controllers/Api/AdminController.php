<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use App\User;

class AdminController extends Controller
{
    public function user()
    {
        $users = User::orderBy('id', 'ASC')->paginate(5);

        return response()->json(compact('users'));
    }

    public function product()
    {
        $products = Product::orderBy('id', 'ASC')->paginate(5);

        return response()->json(compact('products'));
    }

    public function order()
    {
        $orders = Order::orderBy('id', 'ASC')->paginate(5);

        return response()->json(compact('orders'));
    }
}
