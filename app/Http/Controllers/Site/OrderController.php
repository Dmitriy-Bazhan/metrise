<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        $data['path'] = take_path();
        return view('site.pages.orders', $data);
    }
}
