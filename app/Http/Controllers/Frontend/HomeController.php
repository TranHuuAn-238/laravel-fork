<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class HomeController extends Controller
{
    public function index()
    {
        $ordersList = Order::orderBy('id', 'desc')->take(10)->get();
        return view('frontend.home.index', compact('ordersList'));
    }
}
