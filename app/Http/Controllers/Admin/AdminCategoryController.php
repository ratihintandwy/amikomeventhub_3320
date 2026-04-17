<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $categories = [
            ['id' => 1, 'name' => 'Seminar',   'description' => 'Event berbasis presentasi dan diskusi', 'total_events' => 8],
            ['id' => 2, 'name' => 'Workshop',  'description' => 'Event pelatihan praktis dan hands-on',  'total_events' => 5],
            ['id' => 3, 'name' => 'Konser',    'description' => 'Event pertunjukan musik dan seni',       'total_events' => 3],
            ['id' => 4, 'name' => 'Kompetisi', 'description' => 'Event perlombaan dan hackathon',         'total_events' => 4],
            ['id' => 5, 'name' => 'Pameran',   'description' => 'Event pameran karya dan produk',         'total_events' => 2],
            ['id' => 6, 'name' => 'Webinar',   'description' => 'Event seminar berbasis online',           'total_events' => 2],
        ];

        return view('admin.categories', compact('categories'));
    }
}
