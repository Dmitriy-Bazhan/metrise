<?php

namespace App\Http\Controllers;

class SitemapController extends Controller
{
    public function index()
    {
        $data['languages'] = ['', 'ru/']; // '' = ua

        $priority = '0.8';

        $data['pages'] =
            [
                ['url' => '/', 'lastmode' => date('Y-m') . '-01T00:00:01+00:00', 'priority' => '1'],
                ['url' => 'tokarnaya-obrabotka', 'lastmode' => date('Y-m') . '-01T00:00:01+00:00', 'priority' => $priority],
                ['url' => 'frezirovanie', 'lastmode' => date('Y-m') . '-01T00:00:01+00:00', 'priority' => $priority],
                ['url' => 'shlifovalnye-raboty', 'lastmode' => date('Y-m') . '-01T00:00:01+00:00', 'priority' => $priority],
                ['url' => 'zuboreznye-raboty', 'lastmode' => date('Y-m') . '-01T00:00:01+00:00', 'priority' => $priority],
                ['url' => 'termoobrabotka', 'lastmode' => date('Y-m') . '-01T00:00:01+00:00', 'priority' => $priority],
                ['url' => 'pilenie-zagotovok', 'lastmode' => date('Y-m') . '-01T00:00:01+00:00', 'priority' => $priority],
                ['url' => 'slesarnye-raboty', 'lastmode' => date('Y-m') . '-01T00:00:01+00:00', 'priority' => $priority],

            ];

        return response()->view('sitemap.index', $data)->header('Content-Type', 'application/xml');
    }
}
