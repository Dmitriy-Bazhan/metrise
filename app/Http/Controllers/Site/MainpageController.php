<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainpageController extends Controller
{
    public function index(){
        $data = $this->data;
        $data['path'] = take_path();
        return view('site.pages.main_page', $data);
    }

    public function tokarnayaObrabotka() {
        $data = $this->data;
        $data['path'] = take_path();
        $data['image'] = 'tokarniy-stanok.jpg';
        $data['works'] = 'tokarnaia';

        return view('site.pages.work_page', $data);
    }

    public function frezirovka() {
        $data = $this->data;
        $data['path'] = take_path();
        $data['image'] = 'freza-1.jpg';
        $data['works'] = 'frezerovka';

        return view('site.pages.work_page', $data);
    }

    public function shlifovka() {
        $data = $this->data;
        $data['path'] = take_path();
        $data['image'] = 'shlif.jpg';
        $data['works'] = 'shlifovka';

        return view('site.pages.work_page', $data);
    }

    public function slesarnie() {
        $data = $this->data;
        $data['path'] = take_path();
        $data['image'] = 'slesarnie.jpg';
        $data['works'] = 'slesarnie';

        return view('site.pages.work_page', $data);
    }

    public function zuborezka() {
        $data = $this->data;
        $data['path'] = take_path();
        $data['image'] = 'zuborezka.png';
        $data['works'] = 'zuborezka';

        return view('site.pages.work_page', $data);
    }

    public function termo() {
        $data = $this->data;
        $data['path'] = take_path();
        $data['image'] = 'termichka.jpg';
        $data['works'] = 'termochka';

        return view('site.pages.work_page', $data);
    }

    public function pila() {
        $data = $this->data;
        $data['path'] = take_path();
        $data['image'] = 'pila.jpg';
        $data['works'] = 'pila';

        return view('site.pages.work_page', $data);
    }

    public function about_us() {
        $data = $this->data;
        $data['path'] = take_path();
        return view('site.pages.about_us', $data);
    }

    public function gallery() {
        $data = $this->data;
        $data['path'] = take_path();
        return view('site.pages.gallery', $data);
    }

    public function contacts() {
        $data = $this->data;
        $data['path'] = take_path();
        return view('site.pages.contacts', $data);
    }

}
