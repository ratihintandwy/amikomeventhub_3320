<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantuan - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-50 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-white shadow-sm border-b px-6 py-4 flex justify-between items-center">
        <div class="flex items-center gap-2">
            <div class="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center text-white font-bold">AH</div>
            <span class="text-xl font-bold">AmikomEventHub</span>
        </div>
        <div class="flex gap-6 font-medium text-slate-600">
            <a href="{{ route('home') }}" class="hover:text-indigo-600 transition">Home</a>
            <a href="{{ route('katalog') }}" class="hover:text-indigo-600 transition">Katalog</a>
            <a href="{{ route('profil') }}" class="hover:text-indigo-600 transition">Profil</a>
            <a href="{{ route('bantuan') }}" class="text-indigo-600 font-bold">Bantuan</a>
            <a href="{{ route('kontak') }}" class="hover:text-indigo-600 transition">Kontak</a>
        </div>
    </nav>

    <main class="max-w-3xl mx-auto px-6 py-16">
        <div class="text-center mb-12">
            <div class="text-6xl mb-4">🙋</div>
            <h1 class="text-4xl font-black text-slate-800">Pusat Bantuan</h1>
            <p class="text-slate-500 mt-2">Pertanyaan yang sering ditanyakan (FAQ)</p>
        </div>

        <div class="space-y-4">
            <!-- FAQ Item -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
                <h3 class="font-black text-slate-800 mb-2">❓ Bagaimana cara memesan tiket?</h3>
                <p class="text-slate-500 leading-relaxed">Pilih event yang Anda minati dari halaman Katalog, klik "Lihat Detail", lalu klik "Pesan Sekarang". Isi data pemesan dan lakukan pembayaran melalui Midtrans.</p>
            </div>
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
                <h3 class="font-black text-slate-800 mb-2">❓ Metode pembayaran apa yang tersedia?</h3>
                <p class="text-slate-500 leading-relaxed">Kami menerima GoPay/QRIS, Virtual Account (BNI, BRI, BCA), dan Kartu Debit/Kredit melalui payment gateway Midtrans.</p>
            </div>
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
                <h3 class="font-black text-slate-800 mb-2">❓ Di mana saya bisa menemukan tiket saya?</h3>
                <p class="text-slate-500 leading-relaxed">Setelah pembayaran berhasil, e-ticket akan dikirimkan otomatis ke email yang Anda daftarkan. Anda juga bisa mengaksesnya di halaman tiket.</p>
            </div>
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
                <h3 class="font-black text-slate-800 mb-2">❓ Apakah tiket bisa di-refund?</h3>
                <p class="text-slate-500 leading-relaxed">Tiket yang sudah dibeli tidak dapat di-refund sesuai kebijakan penyelenggara. Harap perhatikan tanggal event sebelum memesan.</p>
            </div>
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
                <h3 class="font-black text-slate-800 mb-2">❓ Bagaimana cara check-in di lokasi event?</h3>
                <p class="text-slate-500 leading-relaxed">Tunjukkan QR Code pada e-ticket Anda kepada petugas di pintu masuk. QR Code bisa ditampilkan dari email atau halaman tiket di website ini.</p>
            </div>
        </div>

        <div class="mt-10 text-center">
            <p class="text-slate-500 mb-4">Masih ada pertanyaan?</p>
            <a href="{{ route('kontak') }}" class="inline-block px-8 py-4 bg-indigo-600 text-white rounded-2xl font-black hover:bg-indigo-700 hover:scale-105 transition-all">
                Hubungi Kami 📬
            </a>
        </div>
    </main>

</body>

</html>