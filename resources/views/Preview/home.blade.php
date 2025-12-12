@extends('layouts.app')

@section('content')

<section class="relative bg-gradient-to-r from-blue-900 to-blue-800 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-white opacity-5 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <div class="z-10">
                <div class="inline-block px-4 py-1.5 bg-blue-800 border border-blue-700 rounded-full text-xs font-semibold text-gold-400 mb-6 tracking-wide uppercase">
                    🚀 #1 Platform Edukasi Keuangan
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                    Meningkatkan <span class="text-gold-400">Literasi Keuangan</span><br>
                    Masa Depan.
                </h1>
                <p class="text-lg text-blue-100 mb-8 leading-relaxed max-w-lg">
                    Pelajari manajemen investasi, saham, dan perencanaan finansial pribadi dengan data real-time dan kurikulum terstruktur.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('market') }}" class="group bg-white text-blue-900 font-bold py-3.5 px-8 rounded-lg shadow-lg hover:shadow-xl hover:bg-gray-50 transition-all duration-300 transform hover:-translate-y-1 flex items-center justify-center">
                        <i class="fas fa-chart-line mr-2 text-gold-500"></i> Pantau Market
                    </a>

                    <a href="{{ route('education') }}" class="bg-blue-700/50 border border-blue-600 hover:bg-blue-700 text-white font-semibold py-3.5 px-8 rounded-lg transition-all duration-300 backdrop-blur-sm flex items-center justify-center">
                        Mulai Belajar
                    </a>
                </div>

                <div class="mt-8 flex items-center gap-4 text-sm text-blue-200">
                    <div class="flex -space-x-2">
                        <img class="w-8 h-8 rounded-full border-2 border-blue-900" src="https://i.pravatar.cc/100?img=1" alt="User">
                        <img class="w-8 h-8 rounded-full border-2 border-blue-900" src="https://i.pravatar.cc/100?img=2" alt="User">
                        <img class="w-8 h-8 rounded-full border-2 border-blue-900" src="https://i.pravatar.cc/100?img=3" alt="User">
                    </div>
                    <p>Bergabung dengan <span class="font-bold text-white">2,000+</span> pembelajar</p>
                </div>
            </div>

            <div class="relative hidden md:block group">
                <div class="absolute inset-0 bg-gold-500 rounded-2xl rotate-3 opacity-20 transform group-hover:rotate-6 transition-transform duration-500"></div>
                <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?auto=format&fit=crop&w=800&q=80" alt="Financial Education" class="relative rounded-2xl shadow-2xl w-full transform transition-transform duration-500 group-hover:-translate-y-2 border border-blue-700/30">

                <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-xl shadow-xl border border-gray-100 flex items-center gap-3 animate-bounce" style="animation-duration: 3s;">
                    <div class="bg-green-100 p-2 rounded-full text-green-600">
                        <i class="fas fa-arrow-up"></i>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500 font-semibold">Portfolio Growth</p>
                        <p class="text-lg font-bold text-gray-800">+24.5%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-gray-100">
            <div>
                <p class="text-3xl font-bold text-blue-900">50+</p>
                <p class="text-sm text-gray-500 uppercase tracking-wide mt-1">Artikel Materi</p>
            </div>
            <div>
                <p class="text-3xl font-bold text-blue-900">2K+</p>
                <p class="text-sm text-gray-500 uppercase tracking-wide mt-1">User Terdaftar</p>
            </div>
            <div>
                <p class="text-3xl font-bold text-blue-900">100%</p>
                <p class="text-sm text-gray-500 uppercase tracking-wide mt-1">Gratis Akses</p>
            </div>
            <div>
                <p class="text-3xl font-bold text-blue-900">24/7</p>
                <p class="text-sm text-gray-500 uppercase tracking-wide mt-1">Market Data</p>
            </div>
        </div>
    </div>
</div>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-end mb-12">
            <div>
                <h2 class="text-3xl font-bold text-blue-900 mb-2">Artikel Pilihan</h2>
                <p class="text-gray-600">Insight terbaru untuk upgrade skill finansialmu.</p>
            </div>
            <a href="{{ route('education') }}" class="hidden md:inline-flex items-center text-blue-700 font-semibold hover:text-blue-900 transition-colors">
                Lihat Semua <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="group bg-white rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 overflow-hidden transition-all duration-300 hover:-translate-y-1">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=500&q=80" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-3 left-3 bg-blue-900/90 text-white text-xs font-bold px-2 py-1 rounded">PLANNING</div>
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 leading-snug group-hover:text-blue-700 transition-colors">Dasar-Dasar Financial Planning 2025</h3>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2">Pondasi penting sebelum memulai investasi agresif.</p>
                    <a href="{{ route('article', ['id' => 1]) }}" class="text-gold-600 font-semibold text-sm hover:underline">Baca Sekarang &rarr;</a>
                </div>
            </div>

            <div class="group bg-white rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 overflow-hidden transition-all duration-300 hover:-translate-y-1">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=500&q=80" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-3 left-3 bg-green-600/90 text-white text-xs font-bold px-2 py-1 rounded">INVESTASI</div>
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 leading-snug group-hover:text-blue-700 transition-colors">Panduan Investasi Saham Pemula</h3>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2">Cara membaca grafik dan memilih saham blue chip.</p>
                    <a href="{{ route('article', ['id' => 2]) }}" class="text-gold-600 font-semibold text-sm hover:underline">Baca Sekarang &rarr;</a>
                </div>
            </div>

            <div class="group bg-white rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 overflow-hidden transition-all duration-300 hover:-translate-y-1">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1574643156937-8b7309e7d3e8?auto=format&fit=crop&w=500&q=80" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-3 left-3 bg-purple-600/90 text-white text-xs font-bold px-2 py-1 rounded">LIFESTYLE</div>
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 leading-snug group-hover:text-blue-700 transition-colors">Cara Menabung Efektif (Metode 50/30/20)</h3>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2">Strategi membagi gaji agar tidak boncos di akhir bulan.</p>
                    <a href="{{ route('article', ['id' => 3]) }}" class="text-gold-600 font-semibold text-sm hover:underline">Baca Sekarang &rarr;</a>
                </div>
            </div>

            <div class="group bg-white rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 overflow-hidden transition-all duration-300 hover:-translate-y-1">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?auto=format&fit=crop&w=500&q=80" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-3 left-3 bg-red-600/90 text-white text-xs font-bold px-2 py-1 rounded">BUDGET</div>
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 leading-snug group-hover:text-blue-700 transition-colors">Membuat Anggaran Anti Gagal</h3>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2">Tools dan template sederhana untuk mencatat pengeluaran harian.</p>
                    <a href="{{ route('article', ['id' => 4]) }}" class="text-gold-600 font-semibold text-sm hover:underline">Baca Sekarang &rarr;</a>
                </div>
            </div>
        </div>

        <div class="text-center mt-8 md:hidden">
            <a href="{{ route('education') }}" class="inline-block bg-blue-100 text-blue-900 font-bold py-3 px-8 rounded-lg">Lihat Semua</a>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-blue-900 mb-4">Kenapa Harus <span class="text-gold-500">Maneki?</span></h2>
            <p class="text-lg text-gray-600">
                Kami bukan sekadar blog, tapi ekosistem belajar yang didesain untuk pemula.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="group p-8 rounded-2xl bg-white border border-gray-100 shadow-sm hover:shadow-xl hover:border-gold-400 transition-all duration-300 text-center">
                <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 text-2xl group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Kurikulum Terstruktur</h3>
                <p class="text-gray-500 leading-relaxed">Materi disusun dari level basic hingga advanced, cocok untuk yang buta finansial sekalipun.</p>
            </div>

            <div class="group p-8 rounded-2xl bg-white border border-gray-100 shadow-sm hover:shadow-xl hover:border-gold-400 transition-all duration-300 text-center">
                <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 text-2xl group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <i class="fas fa-chart-pie"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Real-time Market Data</h3>
                <p class="text-gray-500 leading-relaxed">Integrasi langsung dengan data pasar saham dan kripto global tanpa delay.</p>
            </div>

            <div class="group p-8 rounded-2xl bg-white border border-gray-100 shadow-sm hover:shadow-xl hover:border-gold-400 transition-all duration-300 text-center">
                <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 text-2xl group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <i class="fas fa-wallet"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">100% Free Access</h3>
                <p class="text-gray-500 leading-relaxed">Misi sosial kami untuk Indonesia melek finansial. Tanpa biaya langganan apapun.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-blue-900 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-[url('https://www.transparenttextures.com/patterns/diagmonds-light.png')]"></div>
    <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-gold-500 rounded-full blur-3xl opacity-20"></div>

    <div class="relative max-w-4xl mx-auto px-4 text-center z-10">
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">Mulai Perjalanan Finansialmu Hari Ini</h2>
        <p class="text-xl text-blue-100 mb-10">Jangan tunggu tua untuk mulai mengelola uang. Semakin awal memulai, semakin ringan masa depan.</p>

        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('contact') }}" class="bg-gold-500 hover:bg-gold-400 text-blue-900 font-bold py-4 px-10 rounded-lg shadow-lg hover:shadow-gold-500/50 transition-all duration-300 transform hover:-translate-y-1">
                Hubungi Kami
            </a>
            <a href="{{ route('education') }}" class="bg-transparent border border-blue-400 text-blue-100 hover:bg-blue-800 hover:text-white font-bold py-4 px-10 rounded-lg transition-all duration-300">
                Lihat Materi
            </a>
        </div>
    </div>
</section>

@endsection