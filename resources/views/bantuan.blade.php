<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Pusat Bantuan</title>
</head>
<body class="bg-slate-50 antialiased text-slate-800">
    <nav class="p-6 flex justify-center gap-4 bg-white shadow-sm border-b border-slate-200">
        <a href="/" class="px-4 py-2 bg-white border border-slate-200 rounded-lg shadow-sm hover:bg-slate-50 transition">Home</a>
        <a href="/profil" class="px-4 py-2 bg-white border border-slate-200 rounded-lg shadow-sm hover:bg-slate-50 transition">Profil</a>
        <a href="/katalog" class="px-4 py-2 bg-white border border-slate-200 rounded-lg shadow-sm hover:bg-slate-50 transition">Katalog</a>
        <a href="/bantuan" class="px-4 py-2 bg-indigo-600 text-white rounded-lg shadow-md transition">Bantuan</a>
        <a href="/kontak" class="px-4 py-2 bg-white border border-slate-200 rounded-lg shadow-sm hover:bg-slate-50 transition">Kontak</a>
    </nav>

    <div class="max-w-2xl mx-auto mt-12 bg-white p-10 rounded-3xl shadow-sm border border-slate-200">
        <h1 class="text-2xl font-bold mb-6">Ada yang bisa dibantu?</h1>
        <div class="space-y-4">
            <details class="group p-4 bg-slate-50 rounded-xl cursor-pointer">
                <summary class="font-semibold list-none flex justify-between items-center">
                    Bagaimana cara daftar event?
                    <span class="group-open:rotate-180 transition-transform">👇</span>
                </summary>
                <p class="mt-3 text-sm text-slate-600 leading-relaxed">Kamu cukup klik tombol daftar di halaman katalog dan isi formulir yang tersedia.</p>
            </details>
            <details class="group p-4 bg-slate-50 rounded-xl cursor-pointer">
                <summary class="font-semibold list-none flex justify-between items-center">
                    Apakah dapat sertifikat?
                    <span class="group-open:rotate-180 transition-transform">👇</span>
                </summary>
                <p class="mt-3 text-sm text-slate-600 leading-relaxed">Tentu! Sertifikat digital akan dikirimkan maksimal H+3 setelah event berakhir.</p>
            </details>
        </div>
    </div>
</body>
</html>