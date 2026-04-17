<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminTransactionController extends Controller
{
    public function index()
    {
        $transactions = [
            ['id' => 1, 'code' => 'TRX-001', 'name' => 'Yoga Adiyatma',   'event' => 'Seminar AI 2026',       'amount' => 'Rp 50.000',  'date' => '14 Apr 2026', 'status' => 'Lunas'],
            ['id' => 2, 'code' => 'TRX-002', 'name' => 'Siti Rahmawati',  'event' => 'Workshop Laravel',       'amount' => 'Rp 75.000',  'date' => '13 Apr 2026', 'status' => 'Lunas'],
            ['id' => 3, 'code' => 'TRX-003', 'name' => 'Budi Santoso',    'event' => 'Hackathon Digital 2026', 'amount' => 'Rp 100.000', 'date' => '12 Apr 2026', 'status' => 'Pending'],
            ['id' => 4, 'code' => 'TRX-004', 'name' => 'Dewi Kusuma',     'event' => 'Seminar AI 2026',        'amount' => 'Rp 50.000',  'date' => '12 Apr 2026', 'status' => 'Lunas'],
            ['id' => 5, 'code' => 'TRX-005', 'name' => 'Ahmad Fauzi',     'event' => 'Talkshow Entrepreneur',  'amount' => 'Rp 25.000',  'date' => '11 Apr 2026', 'status' => 'Lunas'],
            ['id' => 6, 'code' => 'TRX-006', 'name' => 'Rina Oktavia',    'event' => 'Konser Musik Mahasiswa', 'amount' => 'Gratis',     'date' => '10 Apr 2026', 'status' => 'Lunas'],
        ];

        return view('admin.transactions', compact('transactions'));
    }
}
