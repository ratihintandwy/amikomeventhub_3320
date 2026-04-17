<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Menampilkan halaman detail event
     */
    public function show($id)
    {
        // Data dummy event (nanti dari database)
        $event = [
            'id'          => $id,
            'title'       => 'Seminar Nasional Teknologi AI 2026',
            'category'    => 'Seminar',
            'date'        => 'Senin, 20 April 2026',
            'time'        => '08.00 - 17.00 WIB',
            'location'    => 'Auditorium AMIKOM, Yogyakarta',
            'price'       => 'Rp 50.000',
            'seats'       => 200,
            'seats_left'  => 87,
            'image'       => 'https://via.placeholder.com/800x400/7C3AED/FFFFFF?text=Seminar+Nasional+AI',
            'description' => 'Seminar Nasional Teknologi AI 2026 adalah event prestisius yang membahas perkembangan terkini kecerdasan buatan dan dampaknya terhadap dunia bisnis digital. Dihadiri oleh pakar-pakar terkemuka dari industri teknologi Indonesia.',
            'speaker'     => 'Dr. Andi Suryanto, M.Kom. — Pakar AI dari Institut Teknologi Bandung',
            'organizer'   => 'Himpunan Mahasiswa Sistem Informasi AMIKOM',
        ];

        return view('event-detail', compact('event'));
    }

    /**
     * Menampilkan halaman checkout
     */
    public function checkout()
    {
        $event = [
            'id'       => 1,
            'title'    => 'Seminar Nasional Teknologi AI 2026',
            'date'     => 'Senin, 20 April 2026',
            'location' => 'Auditorium AMIKOM, Yogyakarta',
            'price'    => 50000,
        ];

        return view('checkout', compact('event'));
    }
}
