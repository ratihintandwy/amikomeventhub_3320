@extends('layouts.app')

@section('title', 'Home — Amikom Event Hub')

@section('content')

<!-- HERO SECTION -->
<section class="bg-gradient-to-br from-purple-800 via-purple-700 to-indigo-800 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-block bg-yellow-400 text-purple-900 text-xs font-bold px-3 py-1 rounded-full mb-4 uppercase tracking-widest">
            🎉 Platform Event Terpercaya
        </span>
        <h1 class="text-4xl md:text-5xl font-black leading-tight mb-4">
            Temukan & Ikuti Event <br>
            <span class="text-yellow-400">Terbaik di AMIKOM</span>
        </h1>
        <p class="text-purple-200 text-lg mb-8 max-w-2xl mx-auto">
            Dari seminar, workshop, konser, hingga hackathon — semua event kampus ada di sini. Daftar sekarang dan jangan sampai ketinggalan!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#events" class="bg-yellow-400 text-purple-900 font-bold px-8 py-3 rounded-xl hover:bg-yellow-300 transition duration-300 shadow-lg">
                Jelajahi Event
            </a>
            <a href="{{ route('ticket') }}" class="border-2 border-white text-white font-semibold px-8 py-3 rounded-xl hover:bg-white hover:text-purple-800 transition duration-300">
                Cek Tiket Saya
            </a>
        </div>
    </div>
</section>

<!-- STATS BAR -->
<section class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div>
                <p class="text-2xl font-black text-purple-700">24+</p>
                <p class="text-sm text-gray-500">Event Aktif</p>
            </div>
            <div>
                <p class="text-2xl font-black text-purple-700">2.000+</p>
                <p class="text-sm text-gray-500">Peserta Terdaftar</p>
            </div>
            <div>
                <p class="text-2xl font-black text-purple-700">6</p>
                <p class="text-sm text-gray-500">Kategori Event</p>
            </div>
            <div>
                <p class="text-2xl font-black text-purple-700">100%</p>
                <p class="text-sm text-gray-500">Kepuasan Peserta</p>
            </div>
        </div>
    </div>
</section>

<!-- EVENT LIST SECTION -->
<section id="events" class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="text-center mb-10">
            <h2 class="text-3xl font-black text-gray-800">Event <span class="text-purple-700">Mendatang</span></h2>
            <p class="text-gray-500 mt-2">Temukan event yang sesuai minat dan jadwal Anda</p>
        </div>

        <!-- Event Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($events as $event)
            <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 border border-gray-100 group">

                <!-- Image -->
                <div class="relative overflow-hidden">
                    <img src="{{ $event['image'] }}" alt="{{ $event['title'] }}"
                        class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                    <span class="absolute top-3 left-3 bg-purple-600 text-white text-xs font-semibold px-2.5 py-1 rounded-full">
                        {{ $event['category'] }}
                    </span>
                </div>

                <!-- Content -->
                <div class="p-5">
                    <h3 class="font-bold text-gray-800 text-base leading-snug mb-2 group-hover:text-purple-700 transition">
                        {{ $event['title'] }}
                    </h3>

                    <div class="space-y-1.5 text-sm text-gray-500 mb-4">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            {{ $event['date'] }}
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            </svg>
                            {{ $event['location'] }}
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            {{ $event['seats'] }} kursi tersedia
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-purple-700 font-black text-lg">{{ $event['price'] }}</span>
                        <a href="{{ route('events.show', $event['id']) }}"
                            class="bg-purple-600 text-white text-sm font-semibold px-4 py-2 rounded-lg hover:bg-purple-700 transition duration-200">
                            Detail & Daftar
                        </a>
                    </div>
                </div>

            </div>
            @endforeach
        </div>

    </div>
</section>

@endsection