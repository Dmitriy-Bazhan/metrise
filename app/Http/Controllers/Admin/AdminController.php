<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $orders = Order::all();


        $data['orders'] = $orders;
        return view('admin.orders', $data);
    }
}
