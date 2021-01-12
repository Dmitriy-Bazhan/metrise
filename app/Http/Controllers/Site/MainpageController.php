<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainpageController extends Controller
{
    public function index(){
        $data['path'] = take_path();
        return view('site.pages.main_page', $data);
    }

    public function tokarnayaObrabotka() {
        $data['path'] = take_path();
        return view('site.pages.tokarnaya', $data);
    }

    public function frezirovka() {
        $data['path'] = take_path();
        return view('site.pages.frezirovka', $data);
    }

    public function shlifovka() {
        $data['path'] = take_path();
        return view('site.pages.shlifovka', $data);
    }

    public function slesarnie() {
        $data['path'] = take_path();
        return view('site.pages.slesarnie', $data);
    }

    public function termo() {
        $data['path'] = take_path();
        return view('site.pages.termo', $data);
    }

    public function pila() {
        $data['path'] = take_path();
        return view('site.pages.pila', $data);
    }

    public function about_us() {
        $data['path'] = take_path();
        return view('site.pages.about_us', $data);
    }

    public function gallery() {
        $data['path'] = take_path();
        return view('site.pages.gallery', $data);
    }

    public function contacts() {
        $data['path'] = take_path();
        return view('site.pages.contacts', $data);
    }

}
