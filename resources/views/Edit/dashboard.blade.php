@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="max-w-6xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-800 mb-2">Selamat Datang di CMS Admin</h1>
    <p class="text-gray-600 mb-8">Pilih menu di bawah ini untuk mengelola website atau melihat hasil tampilan.</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        <a href="{{ route('edit.about') }}" class="group block p-6 bg-white border border-gray-200 rounded-xl shadow-sm hover:bg-indigo-50 hover:border-indigo-300 transition cursor-pointer">
            <div class="flex items-center gap-4 mb-4">
                <div class="p-3 bg-indigo-100 text-indigo-600 rounded-lg group-hover:bg-white transition">
                    📝
                </div>
                <h3 class="text-xl font-bold text-gray-800">Edit About</h3>
            </div>
            <p class="text-gray-500 text-sm">Ubah judul, deskripsi, dan kartu-kartu pada bagian "Tentang Kami".</p>
        </a>

        <a href="{{ route('edit.footer') }}" class="group block p-6 bg-white border border-gray-200 rounded-xl shadow-sm hover:bg-purple-50 hover:border-purple-300 transition cursor-pointer">
            <div class="flex items-center gap-4 mb-4">
                <div class="p-3 bg-purple-100 text-purple-600 rounded-lg group-hover:bg-white transition">
                    bawah
                </div>
                <h3 class="text-xl font-bold text-gray-800">Edit Footer</h3>
            </div>
            <p class="text-gray-500 text-sm">Ubah teks copyright dan link sosial media di bagian bawah website.</p>
        </a>

        <a href="{{ route('home') }}" target="_blank" class="group block p-6 bg-gradient-to-br from-indigo-600 to-purple-600 text-white rounded-xl shadow-lg hover:shadow-xl transition transform hover:-translate-y-1">
            <div class="flex items-center gap-4 mb-4">
                <div class="p-3 bg-white/20 rounded-lg">
                    👁️
                </div>
                <h3 class="text-xl font-bold">Lihat Website</h3>
            </div>
            <p class="text-indigo-100 text-sm">Klik di sini untuk membuka halaman website asli (Preview) di tab baru.</p>
        </a>

    </div>
</div>
@endsection