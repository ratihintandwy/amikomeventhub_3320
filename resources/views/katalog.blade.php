<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Event - AmikomEventHub</title>
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
            <a href="{{ route('katalog') }}" class="text-indigo-600 font-bold">Katalog</a>
            <a href="{{ route('profil') }}" class="hover:text-indigo-600 transition">Profil</a>
            <a href="{{ route('bantuan') }}" class="hover:text-indigo-600 transition">Bantuan</a>
            <a href="{{ route('kontak') }}" class="hover:text-indigo-600 transition">Kontak</a>
        </div>
    </nav>

    <!-- Content -->
    <main class="max-w-7xl mx-auto px-6 py-12">
        <div class="mb-10">
            <h1 class="text-4xl font-black text-slate-800">Katalog Event 🎉</h1>
            <p class="text-slate-500 mt-2">Temukan berbagai event seru di Amikom Event Hub</p>
        </div>

        <!-- Filter -->
        <div class="flex gap-3 mb-8 flex-wrap">
            <button class="px-5 py-2 bg-indigo-600 text-white rounded-xl font-bold text-sm">Semua</button>
            <button class="px-5 py-2 border border-slate-200 text-slate-600 rounded-xl font-bold text-sm hover:border-indigo-400 hover:text-indigo-600 transition">🎵 Musik</button>
            <button class="px-5 py-2 border border-slate-200 text-slate-600 rounded-xl font-bold text-sm hover:border-indigo-400 hover:text-indigo-600 transition">💻 Teknologi</button>
            <button class="px-5 py-2 border border-slate-200 text-slate-600 rounded-xl font-bold text-sm hover:border-indigo-400 hover:text-indigo-600 transition">🎓 Workshop</button>
        </div>

        <!-- Event Grid (Placeholder) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden hover:shadow-xl transition-all duration-300 group">
                <div class="h-48 bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-6xl">🎷</div>
                <div class="p-6">
                    <span class="text-xs font-bold text-indigo-600 uppercase bg-indigo-50 px-3 py-1 rounded-full">Musik</span>
                    <h3 class="text-lg font-black mt-3 mb-1 group-hover:text-indigo-600 transition">Jazz Night 2024</h3>
                    <p class="text-slate-500 text-sm">16 November 2024 • Blue Note Lounge</p>
                    <div class="mt-4 flex justify-between items-center pt-4 border-t">
                        <span class="text-indigo-600 font-black text-xl">Rp 150.000</span>
                        <a href="{{ route('events.show', 1) }}" class="px-4 py-2 bg-indigo-50 text-indigo-600 rounded-xl font-bold text-sm hover:bg-indigo-600 hover:text-white transition">Detail →</a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden hover:shadow-xl transition-all duration-300 group">
                <div class="h-48 bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center text-6xl">🤖</div>
                <div class="p-6">
                    <span class="text-xs font-bold text-cyan-600 uppercase bg-cyan-50 px-3 py-1 rounded-full">Teknologi</span>
                    <h3 class="text-lg font-black mt-3 mb-1 group-hover:text-cyan-600 transition">AI & Future Workshop</h3>
                    <p class="text-slate-500 text-sm">26 Oktober 2024 • Aula Utama</p>
                    <div class="mt-4 flex justify-between items-center pt-4 border-t">
                        <span class="text-indigo-600 font-black text-xl">Rp 50.000</span>
                        <a href="{{ route('events.show', 2) }}" class="px-4 py-2 bg-indigo-50 text-indigo-600 rounded-xl font-bold text-sm hover:bg-indigo-600 hover:text-white transition">Detail →</a>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden hover:shadow-xl transition-all duration-300 group">
                <div class="h-48 bg-gradient-to-br from-green-500 to-teal-600 flex items-center justify-center text-6xl">💻</div>
                <div class="p-6">
                    <span class="text-xs font-bold text-green-600 uppercase bg-green-50 px-3 py-1 rounded-full">Coding</span>
                    <h3 class="text-lg font-black mt-3 mb-1 group-hover:text-green-600 transition">Hackathon 2024</h3>
                    <p class="text-slate-500 text-sm">18-20 Oktober 2024 • Lab Komputer</p>
                    <div class="mt-4 flex justify-between items-center pt-4 border-t">
                        <span class="text-green-600 font-black text-xl">GRATIS</span>
                        <a href="{{ route('events.show', 3) }}" class="px-4 py-2 bg-indigo-50 text-indigo-600 rounded-xl font-bold text-sm hover:bg-indigo-600 hover:text-white transition">Detail →</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>