@extends('layouts.admin')

@section('title', 'Manajemen Transaksi')
@section('page-title', 'Transaksi')
@section('page-subtitle', 'Riwayat seluruh transaksi pembelian tiket')

@section('content')

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">

    <div class="p-5 border-b border-gray-100">
        <h3 class="font-bold text-gray-800">Daftar Transaksi</h3>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-gray-500 text-xs uppercase tracking-wide">
                <tr>
                    <th class="text-left px-5 py-3">Kode</th>
                    <th class="text-left px-5 py-3">Nama</th>
                    <th class="text-left px-5 py-3">Event</th>
                    <th class="text-left px-5 py-3">Jumlah</th>
                    <th class="text-left px-5 py-3">Tanggal</th>
                    <th class="text-left px-5 py-3">Status</th>
                    <th class="text-left px-5 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                @foreach($transactions as $trx)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-5 py-3.5 font-mono text-xs text-gray-500">{{ $trx['code'] }}</td>
                    <td class="px-5 py-3.5 font-medium text-gray-800">{{ $trx['name'] }}</td>
                    <td class="px-5 py-3.5 text-gray-600">{{ $trx['event'] }}</td>
                    <td class="px-5 py-3.5 font-semibold text-gray-700">{{ $trx['amount'] }}</td>
                    <td class="px-5 py-3.5 text-gray-500">{{ $trx['date'] }}</td>
                    <td class="px-5 py-3.5">
                        @if($trx['status'] === 'Lunas')
                        <span class="bg-green-100 text-green-700 text-xs font-semibold px-2.5 py-1 rounded-full">Lunas</span>
                        @else
                        <span class="bg-yellow-100 text-yellow-700 text-xs font-semibold px-2.5 py-1 rounded-full">Pending</span>
                        @endif
                    </td>
                    <td class="px-5 py-3.5">
                        <button class="text-blue-500 hover:text-blue-700 text-xs font-medium">Detail</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection