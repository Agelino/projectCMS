@extends('layouts.app')

@section('content')

<section class="relative bg-gradient-to-r from-blue-900 to-blue-800 text-white pt-20 pb-28 overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
    <div class="absolute bottom-0 right-0 w-64 h-64 bg-gold-500 opacity-10 rounded-full blur-3xl -mr-16 -mb-16"></div>

    <div class="relative max-w-4xl mx-auto px-4 text-center z-10">
        <span class="text-gold-400 font-bold tracking-widest uppercase text-xs mb-2 block">Maneki Academy</span>
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Perpustakaan Ilmu Finansial</h1>
        <p class="text-xl text-blue-100 mb-8">
            Upgrade skill pengelolaan uangmu dengan ratusan artikel yang dikurasi oleh para ahli.
        </p>

        <form action="{{ route('education') }}" method="GET" class="relative max-w-2xl mx-auto">
            <div class="relative group">
                <div class="absolute inset-0 bg-gold-400 rounded-full blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                <div class="relative flex items-center bg-white rounded-full shadow-2xl p-2">
                    <div class="pl-4 text-gray-400">
                        <i class="fas fa-search text-lg"></i>
                    </div>
                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Cari topik... (misal: Cara beli saham, Dana darurat)"
                        class="w-full px-4 py-3 text-gray-700 bg-transparent border-none focus:ring-0 focus:outline-none placeholder-gray-400">
                    <button type="submit" class="bg-blue-900 text-white px-6 py-3 rounded-full font-bold hover:bg-blue-800 transition-all shadow-md">
                        Cari
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>

<div class="bg-white border-b border-gray-100 sticky top-0 z-30 shadow-sm bg-opacity-90 backdrop-blur-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-2 overflow-x-auto py-4 no-scrollbar">
            <a href="{{ route('education') }}" class="whitespace-nowrap px-5 py-2 rounded-full text-sm font-semibold transition-all {{ !request('category') ? 'bg-blue-900 text-white shadow-md' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                All Topics
            </a>
            @foreach(['Investasi', 'Budgeting', 'Saham', 'Crypto', 'Asuransi', 'Pajak', 'Bisnis'] as $cat)
            <a href="{{ route('education', ['category' => $cat]) }}" class="whitespace-nowrap px-5 py-2 rounded-full text-sm font-semibold transition-all {{ request('category') == $cat ? 'bg-blue-900 text-white shadow-md' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                {{ $cat }}
            </a>
            @endforeach
        </div>
    </div>
</div>

<div class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        @if(!request('search') && !request('category'))
        <div class="mb-16">
            <h2 class="text-2xl font-bold text-blue-900 mb-6 flex items-center gap-2">
                <i class="fas fa-star text-gold-500"></i> Editor's Pick
            </h2>
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100 grid grid-cols-1 lg:grid-cols-2 group hover:shadow-2xl transition-all duration-300">
                <div class="relative h-64 lg:h-auto overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1579532415943-ca53cfb5db30?auto=format&fit=crop&w=800&q=80" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute top-4 left-4 bg-gold-500 text-blue-900 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                        Trending
                    </div>
                </div>
                <div class="p-8 lg:p-12 flex flex-col justify-center">
                    <div class="flex items-center gap-3 text-sm text-gray-500 mb-4">
                        <span class="flex items-center gap-1"><i class="far fa-clock"></i> 8 min read</span>
                        <span>•</span>
                        <span>Investasi</span>
                    </div>
                    <h3 class="text-3xl font-bold text-blue-900 mb-4 leading-tight group-hover:text-blue-700 transition-colors">
                        Strategi Dollar Cost Averaging: Rahasia Cuan Tanpa Pusing Market Crash
                    </h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Jangan biarkan emosi mengatur investasimu. Pelajari metode DCA yang terbukti ampuh melawan volatilitas pasar saham dan kripto dalam jangka panjang.
                    </p>
                    <div class="flex items-center justify-between mt-auto">
                        <div class="flex items-center gap-3">
                            <img src="https://i.pravatar.cc/150?img=11" class="w-10 h-10 rounded-full border-2 border-white shadow-sm">
                            <div>
                                <p class="text-sm font-bold text-gray-900">Sarah Wijaya</p>
                                <p class="text-xs text-gray-500">Financial Planner</p>
                            </div>
                        </div>
                        <a href="#" class="w-12 h-12 rounded-full bg-blue-50 text-blue-900 flex items-center justify-center group-hover:bg-blue-900 group-hover:text-white transition-all">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="flex justify-between items-end mb-8">
            <h2 class="text-2xl font-bold text-blue-900">
                {{ request('search') ? 'Hasil Pencarian' : 'Artikel Terbaru' }}
            </h2>
            <form id="sortForm" class="hidden md:block">
                <select name="sort" onchange="this.form.submit()" class="bg-white border border-gray-200 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 shadow-sm">
                    <option value="newest">Terbaru</option>
                    <option value="popular">Terpopuler</option>
                </select>
            </form>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
            $articles = [
            ['title' => 'Dasar-Dasar Financial Planning', 'cat' => 'Budgeting', 'img' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c', 'read' => '5 min'],
            ['title' => 'Panduan Investasi Saham Pemula', 'cat' => 'Saham', 'img' => 'https://images.unsplash.com/photo-1611974765270-ca1258634369', 'read' => '7 min'],
            ['title' => 'Cara Menabung Gaji UMR', 'cat' => 'Budgeting', 'img' => 'https://images.unsplash.com/photo-1579621970563-ebec7560ff3e', 'read' => '4 min'],
            ['title' => 'Mengenal Pajak Investasi', 'cat' => 'Pajak', 'img' => 'https://images.unsplash.com/photo-1586486855514-8c633cc6fd38', 'read' => '6 min'],
            ['title' => 'Asuransi Kesehatan vs Jiwa', 'cat' => 'Asuransi', 'img' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d', 'read' => '5 min'],
            ['title' => 'Apa itu Cryptocurrency?', 'cat' => 'Crypto', 'img' => 'https://images.unsplash.com/photo-1518546305927-5a555bb7020d', 'read' => '10 min'],
            ];
            @endphp

            @foreach($articles as $index => $article)
            <article class="bg-white rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 overflow-hidden transition-all duration-300 hover:-translate-y-1 flex flex-col h-full group">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ $article['img'] }}?auto=format&fit=crop&w=500&q=80" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-3 left-3">
                        <span class="bg-white/90 backdrop-blur-sm text-blue-900 text-xs font-bold px-3 py-1 rounded-md shadow-sm">
                            {{ $article['cat'] }}
                        </span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-gray-400 mb-3">
                        <i class="far fa-calendar-alt"></i> 2 Hari lalu
                        <span>•</span>
                        <i class="far fa-clock"></i> {{ $article['read'] }} read
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3 leading-snug group-hover:text-blue-700 transition-colors">
                        {{ $article['title'] }}
                    </h3>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2 flex-1">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore...
                    </p>
                    <div class="border-t border-gray-100 pt-4 flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <img src="https://i.pravatar.cc/150?img={{ $index + 20 }}" class="w-6 h-6 rounded-full">
                            <span class="text-xs font-semibold text-gray-600">Admin Maneki</span>
                        </div>
                        <a href="{{ route('article', ['id' => $index+1]) }}" class="text-gold-600 text-sm font-bold hover:underline">
                            Baca <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>

        <div class="mt-20">
            <div class="bg-blue-900 rounded-3xl p-8 md:p-12 relative overflow-hidden text-center md:text-left">
                <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full blur-3xl -mr-16 -mt-16"></div>
                <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
                    <div class="max-w-xl">
                        <h3 class="text-2xl md:text-3xl font-bold text-white mb-2">Jangan Ketinggalan Ilmu Cuan! 🚀</h3>
                        <p class="text-blue-100">Dapatkan ringkasan berita pasar dan tips keuangan mingguan langsung di inbox-mu.</p>
                    </div>
                    <div class="w-full md:w-auto">
                        <form class="flex flex-col sm:flex-row gap-3">
                            <input type="email" placeholder="Masukkan email kamu..." class="px-5 py-3 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-gold-400 w-full sm:w-80">
                            <button class="bg-gold-500 hover:bg-gold-400 text-blue-900 font-bold px-6 py-3 rounded-lg transition-colors whitespace-nowrap">
                                Subscribe Gratis
                            </button>
                        </form>
                        <p class="text-xs text-blue-300 mt-2 text-center md:text-left">*Kami benci spam. Unsubscribe kapan saja.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <button class="inline-flex items-center gap-2 px-8 py-3 bg-white border border-gray-200 rounded-full text-blue-900 font-bold shadow-sm hover:shadow-md hover:bg-gray-50 transition-all">
                <i class="fas fa-sync-alt"></i> Muat Lebih Banyak
            </button>
        </div>

    </div>
</div>
@endsection