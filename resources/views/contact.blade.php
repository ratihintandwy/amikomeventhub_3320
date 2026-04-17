<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-100 min-h-screen">

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
            <a href="{{ route('bantuan') }}" class="hover:text-indigo-600 transition">Bantuan</a>
            <a href="{{ route('kontak') }}" class="text-indigo-600 font-bold">Kontak</a>
        </div>
    </nav>

    <main class="flex items-center justify-center min-h-[calc(100vh-72px)] px-6">
        <div class="bg-white p-10 rounded-3xl shadow-xl border border-slate-200 text-center max-w-md w-full">
            <div class="text-5xl mb-4">📬</div>
            <h1 class="text-2xl font-black text-slate-800 mb-2">Hubungi Kami</h1>
            <p class="text-slate-500 mb-8">Tim AmikomEventHub siap membantu Anda</p>

            <div class="space-y-4 text-left mb-8">
                <div class="flex items-center gap-4 p-4 bg-indigo-50 rounded-2xl">
                    <span class="text-2xl">📧</span>
                    <div>
                        <p class="text-xs text-slate-400 font-bold uppercase">Email</p>
                        <p class="font-bold text-indigo-600">admin@amikomeventhub.com</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 p-4 bg-green-50 rounded-2xl">
                    <span class="text-2xl">📱</span>
                    <div>
                        <p class="text-xs text-slate-400 font-bold uppercase">WhatsApp</p>
                        <p class="font-bold text-green-600">+62 812 3456 7890</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 p-4 bg-purple-50 rounded-2xl">
                    <span class="text-2xl">📍</span>
                    <div>
                        <p class="text-xs text-slate-400 font-bold uppercase">Alamat</p>
                        <p class="font-bold text-purple-600">Jl. Ring Road Utara, Yogyakarta</p>
                    </div>
                </div>
            </div>

            <a href="{{ route('home') }}" class="inline-block bg-indigo-600 text-white font-bold py-3 px-8 rounded-2xl hover:bg-indigo-700 hover:shadow-lg transition duration-300">
                ← Kembali ke Home
            </a>
        </div>
    </main>

</body>

</html>