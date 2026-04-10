<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kontak</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 flex flex-col min-h-screen">

    <nav class="p-6 flex justify-center gap-4 bg-white shadow-sm border-b border-slate-200">
        <a href="/" class="px-4 py-2 bg-white border border-slate-200 rounded-lg shadow-sm hover:bg-slate-50 transition">Home</a>
        <a href="/profil" class="px-4 py-2 bg-white border border-slate-200 rounded-lg shadow-sm hover:bg-slate-50 transition">Profil</a>
        <a href="/katalog" class="px-4 py-2 bg-white border border-slate-200 rounded-lg shadow-sm hover:bg-slate-50 transition">Katalog</a>
        <a href="/bantuan" class="px-4 py-2 bg-white border border-slate-200 rounded-lg shadow-sm hover:bg-slate-50 transition">Bantuan</a>
        <a href="/kontak" class="px-4 py-2 bg-indigo-600 text-white rounded-lg shadow-md transition">Kontak</a>
    </nav>

    <div class="flex-grow flex items-center justify-center">
        <div class="bg-white p-8 rounded-2xl shadow-xl border border-slate-200 text-center max-w-sm w-full mx-4">
            <div class="w-16 h-16 bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                @
            </div>
            <h1 class="text-2xl font-bold text-slate-800 mb-2">Hubungi Kami</h1>
            <p class="text-slate-500 mb-6">Email: admin@amikomeventhub.com</p>
            
            <a href="/" class="inline-block w-full bg-slate-800 text-white font-semibold py-3 px-6 rounded-xl hover:bg-slate-900 transition duration-300">
                Kembali ke Home
            </a>
        </div>
    </div>

    <footer class="text-center py-6 text-slate-400 text-xs uppercase tracking-widest">
        Amikom Event Hub &copy; 2026
    </footer>

</body>
</html>