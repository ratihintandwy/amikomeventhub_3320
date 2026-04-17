<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - AmikomEventHub</title>
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
            <a href="{{ route('profil') }}" class="text-indigo-600 font-bold">Profil</a>
            <a href="{{ route('bantuan') }}" class="hover:text-indigo-600 transition">Bantuan</a>
            <a href="{{ route('kontak') }}" class="hover:text-indigo-600 transition">Kontak</a>
        </div>
    </nav>

    <!-- Content -->
    <main class="max-w-2xl mx-auto px-6 py-16">
        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm p-10 text-center">
            <div class="w-24 h-24 bg-indigo-600 rounded-full flex items-center justify-center text-white text-4xl font-black mx-auto mb-6">
                👨‍🎓
            </div>
            <h1 class="text-3xl font-black text-slate-800 mb-2">Profil Praktikan</h1>
            <p class="text-slate-500 mb-8">Mata Kuliah Digital Bisnis (SI148)</p>

            <div class="space-y-4 text-left">
                <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-2xl">
                    <span class="text-2xl">👤</span>
                    <div>
                        <p class="text-xs text-slate-400 font-bold uppercase">Nama</p>
                        <p class="font-bold text-slate-800">Yoga Adiyatma</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-2xl">
                    <span class="text-2xl">🎓</span>
                    <div>
                        <p class="text-xs text-slate-400 font-bold uppercase">NIM</p>
                        <p class="font-bold text-slate-800">3320</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-2xl">
                    <span class="text-2xl">📚</span>
                    <div>
                        <p class="text-xs text-slate-400 font-bold uppercase">Program Studi</p>
                        <p class="font-bold text-slate-800">S1 Sistem Informasi</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-2xl">
                    <span class="text-2xl">🏫</span>
                    <div>
                        <p class="text-xs text-slate-400 font-bold uppercase">Universitas</p>
                        <p class="font-bold text-slate-800">Universitas AMIKOM Yogyakarta</p>
                    </div>
                </div>
            </div>

            <div class="mt-8 flex gap-3 justify-center">
                <a href="{{ route('home') }}" class="px-6 py-3 bg-indigo-600 text-white rounded-xl font-bold hover:bg-indigo-700 transition">
                    Kembali ke Home
                </a>
                <a href="{{ route('katalog') }}" class="px-6 py-3 border-2 border-indigo-200 text-indigo-600 rounded-xl font-bold hover:bg-indigo-50 transition">
                    Lihat Katalog Event
                </a>
            </div>
        </div>
    </main>

</body>

</html>