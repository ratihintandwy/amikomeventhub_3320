<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Menampilkan halaman kelola event (Admin)
     * Sesuai Instruksi Modul Pertemuan 3 - 3.4.5
     */
    public function index()
    {
        return view('admin.events');
    }
}
