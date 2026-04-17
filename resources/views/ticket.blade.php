@extends('layouts.app')

@section('title', 'Tiket Saya — Amikom Event Hub')

@section('content')

<div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

    <!-- Success Message -->
    <div class="text-center mb-8">
        <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
        <h1 class="text-2xl font-black text-gray-800">Tiket Berhasil Dipesan! 🎉</h1>
        <p class="text-gray-500 mt-1">Simpan tiket ini sebagai bukti pendaftaran Anda</p>
    </div>

    <!-- Ticket Card -->
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-100">

        <!-- Ticket Header -->
        <div class="bg-gradient-to-r from-purple-700 to-indigo-700 p-6 text-white">
            <div class="flex items-center justify-between mb-1">
                <span class="text-xs font-bold uppercase tracking-widest text-purple-300">AmikomEventHub</span>
                <span class="bg-yellow-400 text-purple-900 text-xs font-bold px-2.5 py-1 rounded-full">E-TICKET</span>
            </div>
            <h2 class="text-xl font-black mt-2 leading-snug">{{ $ticket['event_title'] }}</h2>
        </div>

        <!-- Ticket Body -->
        <div class="p-6">

            <div class="grid grid-cols-2 gap-4 mb-6 text-sm">
                <div>
                    <p class="text-gray-400 text-xs mb-0.5">Nama Pemegang Tiket</p>
                    <p class="font-semibold text-gray-800">{{ $ticket['holder_name'] }}</p>
                </div>
                <div>
                    <p class="text-gray-400 text-xs mb-0.5">NIM</p>
                    <p class="font-semibold text-gray-800">{{ $ticket['holder_nim'] }}</p>
                </div>
                <div>
                    <p class="text-gray-400 text-xs mb-0.5">Tanggal</p>
                    <p class="font-semibold text-gray-800">{{ $ticket['date'] }}</p>
                </div>
                <div>
                    <p class="text-gray-400 text-xs mb-0.5">Waktu</p>
                    <p class="font-semibold text-gray-800">{{ $ticket['time'] }}</p>
                </div>
                <div class="col-span-2">
                    <p class="text-gray-400 text-xs mb-0.5">Lokasi</p>
                    <p class="font-semibold text-gray-800">{{ $ticket['location'] }}</p>
                </div>
                <div>
                    <p class="text-gray-400 text-xs mb-0.5">Jenis Tiket</p>
                    <p class="font-semibold text-gray-800">{{ $ticket['seat_type'] }}</p>
                </div>
                <div>
                    <p class="text-gray-400 text-xs mb-0.5">Harga</p>
                    <p class="font-semibold text-purple-700">{{ $ticket['price'] }}</p>
                </div>
            </div>

            <!-- Divider perforasi -->
            <div class="flex items-center gap-2 my-4">
                <div class="w-6 h-6 bg-gray-100 rounded-full -ml-9"></div>
                <div class="flex-1 border-t-2 border-dashed border-gray-200"></div>
                <div class="w-6 h-6 bg-gray-100 rounded-full -mr-9"></div>
            </div>

            <!-- Kode Tiket -->
            <div class="text-center">
                <p class="text-xs text-gray-400 mb-1">Kode Tiket</p>
                <p class="text-2xl font-black text-gray-800 tracking-widest">{{ $ticket['code'] }}</p>
                <p class="text-xs text-gray-400 mt-2">Tunjukkan kode ini kepada panitia saat registrasi ulang</p>
            </div>

        </div>

        <!-- Ticket Footer -->
        <div class="bg-gray-50 px-6 py-4 text-center">
            <p class="text-xs text-gray-400">Tiket ini hanya berlaku untuk satu orang. Dilarang dipindahtangankan.</p>
        </div>

    </div>

    <div class="flex gap-4 mt-6 justify-center">
        <a href="{{ route('home') }}"
            class="bg-purple-600 text-white font-semibold px-6 py-2.5 rounded-xl hover:bg-purple-700 transition text-sm">
            Kembali ke Home
        </a>
    </div>

</div>

@endsection