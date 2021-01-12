<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainpageController extends Controller
{
    public function index(){
        return view('site.pages.main_page');
    }
}
