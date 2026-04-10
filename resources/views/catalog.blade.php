<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Katalog Event</title>
</head>
<body class="bg-slate-50 antialiased">
    <nav class="p-6 flex justify-center gap-4 bg-white shadow-sm border-b border-slate-200">
        <a href="/" class="px-4 py-2 bg-white border border-slate-200 rounded-lg shadow-sm hover:bg-slate-50 transition">Home</a>
        <a href="/profil" class="px-4 py-2 bg-white border border-slate-200 rounded-lg shadow-sm hover:bg-slate-50 transition">Profil</a>
        <a href="/katalog" class="px-4 py-2 bg-indigo-600 text-white rounded-lg shadow-md transition">Katalog</a>
        <a href="/bantuan" class="px-4 py-2 bg-white border border-slate-200 rounded-lg shadow-sm hover:bg-slate-50 transition">Bantuan</a>
        <a href="/kontak" class="px-4 py-2 bg-white border border-slate-200 rounded-lg shadow-sm hover:bg-slate-50 transition">Kontak</a>
    </nav>

    <div class="max-w-4xl mx-auto px-6 py-10">
        <h2 class="text-3xl font-extrabold mb-8 text-slate-900">Katalog Event 🔥</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="group p-6 bg-white rounded-2xl border border-slate-200 hover:border-blue-500 hover:shadow-lg transition-all cursor-pointer">
                <span class="text-xs font-bold text-blue-600 uppercase tracking-widest">Tech</span>
                <h3 class="text-xl font-bold mt-2">Workshop Laravel 11</h3>
                <p class="text-slate-500 mt-2 text-sm">Pelajari Clean Architecture dan Service Layer.</p>
            </div>
            <div class="group p-6 bg-white rounded-2xl border border-slate-200 hover:border-blue-500 hover:shadow-lg transition-all cursor-pointer">
                <span class="text-xs font-bold text-indigo-600 uppercase tracking-widest">Security</span>
                <h3 class="text-xl font-bold mt-2">Cyber Defense Seminar</h3>
                <p class="text-slate-500 mt-2 text-sm">Analisis ancaman siber di tahun 2026.</p>
            </div>
        </div>
    </div>
</body>
</html>