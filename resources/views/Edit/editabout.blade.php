@extends('layouts.app')

@section('content')

<section class="relative bg-gradient-to-r from-blue-900 to-blue-800 text-white py-16 overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-2">Edit Halaman About</h1>
        <p class="text-xl text-blue-100">Ubah konten halaman about dan lihat perubahannya di halaman</p>
    </div>
</section>

<div class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if ($errors->any())
            <div class="mb-6 bg-red-50 border-l-4 border-red-500 p-4 rounded">
                <h5 class="font-bold text-red-700 mb-2"><i class="fas fa-exclamation-triangle me-2"></i>Ada Kesalahan!</h5>
                <ul class="text-red-600 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded">
                <h5 class="font-bold text-green-700"><i class="fas fa-check-circle me-2"></i>{{ session('success') }}</h5>
            </div>
        @endif

        <form action="{{ route('content.updateAbout') }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- BAGIAN HERO -->
            <div class="bg-white rounded-xl shadow-sm p-8">
                <h2 class="text-2xl font-bold text-blue-900 mb-6 pb-4 border-b-2 border-blue-900">
                    <i class="fas fa-heading me-3"></i>Bagian Hero
                </h2>
                <div class="space-y-4">
                    <div>
                        <label for="subtitle" class="block text-sm font-bold text-blue-900 mb-2">Subtitle (Warna Emas)</label>
                        <input type="text" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('subtitle') border-red-500 @enderror" id="subtitle" name="subtitle" value="{{ $about->subtitle ?? '' }}" required>
                        @error('subtitle')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                    <div>
                        <label for="title" class="block text-sm font-bold text-blue-900 mb-2">Judul Hero</label>
                        <textarea class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('title') border-red-500 @enderror" id="title" name="title" rows="3" required>{{ $about->title ?? '' }}</textarea>
                        <p class="text-xs text-gray-500 mt-1">Gunakan &lt;br&gt; untuk ganti baris dan &lt;span class="text-gold-400"&gt;text&lt;/span&gt; untuk warna emas</p>
                        @error('title')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                    <div>
                        <label for="description" class="block text-sm font-bold text-blue-900 mb-2">Deskripsi Hero</label>
                        <textarea class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('description') border-red-500 @enderror" id="description" name="description" rows="3" required>{{ $about->description ?? '' }}</textarea>
                        @error('description')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <!-- STATISTIK -->
            <div class="bg-white rounded-xl shadow-sm p-8">
                <h2 class="text-2xl font-bold text-blue-900 mb-6 pb-4 border-b-2 border-blue-900">
                    <i class="fas fa-chart-bar me-3"></i>Statistik
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="founded_year" class="block text-sm font-bold text-blue-900 mb-2">Tahun Berdiri</label>
                        <input type="text" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('founded_year') border-red-500 @enderror" id="founded_year" name="founded_year" value="{{ $about->founded_year ?? '' }}" required>
                        @error('founded_year')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                    <div>
                        <label for="active_users" class="block text-sm font-bold text-blue-900 mb-2">Pengguna Aktif</label>
                        <input type="text" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('active_users') border-red-500 @enderror" id="active_users" name="active_users" value="{{ $about->active_users ?? '' }}" required>
                        @error('active_users')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                    <div>
                        <label for="materials" class="block text-sm font-bold text-blue-900 mb-2">Materi Edukasi</label>
                        <input type="text" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('materials') border-red-500 @enderror" id="materials" name="materials" value="{{ $about->materials ?? '' }}" required>
                        @error('materials')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                    <div>
                        <label for="free_access" class="block text-sm font-bold text-blue-900 mb-2">Gratis Akses</label>
                        <input type="text" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('free_access') border-red-500 @enderror" id="free_access" name="free_access" value="{{ $about->free_access ?? '' }}" required>
                        @error('free_access')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <!-- CERITA -->
            <div class="bg-white rounded-xl shadow-sm p-8">
                <h2 class="text-2xl font-bold text-blue-900 mb-6 pb-4 border-b-2 border-blue-900">
                    <i class="fas fa-book me-3"></i>Cerita Kami
                </h2>
                <div class="space-y-4">
                    <div>
                        <label for="story_title" class="block text-sm font-bold text-blue-900 mb-2">Judul Cerita</label>
                        <input type="text" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('story_title') border-red-500 @enderror" id="story_title" name="story_title" value="{{ $about->story_title ?? '' }}" required>
                        @error('story_title')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                    <div>
                        <label for="story_content" class="block text-sm font-bold text-blue-900 mb-2">Isi Cerita</label>
                        <textarea class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('story_content') border-red-500 @enderror" id="story_content" name="story_content" rows="6" required>{{ $about->story_content ?? '' }}</textarea>
                        <p class="text-xs text-gray-500 mt-1">Gunakan &lt;br&gt; untuk ganti baris</p>
                        @error('story_content')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <!-- MISI & VISI -->
            <div class="bg-white rounded-xl shadow-sm p-8">
                <h2 class="text-2xl font-bold text-blue-900 mb-6 pb-4 border-b-2 border-blue-900">
                    <i class="fas fa-target me-3"></i>Misi & Visi
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="mission" class="block text-sm font-bold text-blue-900 mb-2">Misi</label>
                        <textarea class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('mission') border-red-500 @enderror" id="mission" name="mission" rows="4" required>{{ $about->mission ?? '' }}</textarea>
                        @error('mission')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                    <div>
                        <label for="vision" class="block text-sm font-bold text-blue-900 mb-2">Visi</label>
                        <textarea class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('vision') border-red-500 @enderror" id="vision" name="vision" rows="4" required>{{ $about->vision ?? '' }}</textarea>
                        @error('vision')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <!-- NILAI-NILAI -->
            <div class="bg-white rounded-xl shadow-sm p-8">
                <h2 class="text-2xl font-bold text-blue-900 mb-6 pb-4 border-b-2 border-blue-900">
                    <i class="fas fa-heart me-3"></i>Nilai-Nilai Kami (3 Nilai)
                </h2>
                <div class="space-y-6">
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center"><span class="flex-shrink-0 w-8 h-8 bg-blue-900 text-white rounded-full flex items-center justify-center text-sm">1</span><span class="ml-3">Nilai Pertama</span></h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="md:col-span-1">
                                <label for="value1_title" class="block text-sm font-bold text-blue-900 mb-2">Judul</label>
                                <input type="text" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('value1_title') border-red-500 @enderror" id="value1_title" name="value1_title" value="{{ $about->value1_title ?? '' }}" required>
                                @error('value1_title')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                            </div>
                            <div class="md:col-span-2">
                                <label for="value1_desc" class="block text-sm font-bold text-blue-900 mb-2">Deskripsi</label>
                                <textarea class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('value1_desc') border-red-500 @enderror" id="value1_desc" name="value1_desc" rows="2" required>{{ $about->value1_desc ?? '' }}</textarea>
                                @error('value1_desc')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center"><span class="flex-shrink-0 w-8 h-8 bg-blue-900 text-white rounded-full flex items-center justify-center text-sm">2</span><span class="ml-3">Nilai Kedua</span></h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="md:col-span-1">
                                <label for="value2_title" class="block text-sm font-bold text-blue-900 mb-2">Judul</label>
                                <input type="text" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('value2_title') border-red-500 @enderror" id="value2_title" name="value2_title" value="{{ $about->value2_title ?? '' }}" required>
                                @error('value2_title')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                            </div>
                            <div class="md:col-span-2">
                                <label for="value2_desc" class="block text-sm font-bold text-blue-900 mb-2">Deskripsi</label>
                                <textarea class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('value2_desc') border-red-500 @enderror" id="value2_desc" name="value2_desc" rows="2" required>{{ $about->value2_desc ?? '' }}</textarea>
                                @error('value2_desc')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center"><span class="flex-shrink-0 w-8 h-8 bg-blue-900 text-white rounded-full flex items-center justify-center text-sm">3</span><span class="ml-3">Nilai Ketiga</span></h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="md:col-span-1">
                                <label for="value3_title" class="block text-sm font-bold text-blue-900 mb-2">Judul</label>
                                <input type="text" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('value3_title') border-red-500 @enderror" id="value3_title" name="value3_title" value="{{ $about->value3_title ?? '' }}" required>
                                @error('value3_title')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                            </div>
                            <div class="md:col-span-2">
                                <label for="value3_desc" class="block text-sm font-bold text-blue-900 mb-2">Deskripsi</label>
                                <textarea class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('value3_desc') border-red-500 @enderror" id="value3_desc" name="value3_desc" rows="2" required>{{ $about->value3_desc ?? '' }}</textarea>
                                @error('value3_desc')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TESTIMONIAL -->
            <div class="bg-white rounded-xl shadow-sm p-8">
                <h2 class="text-2xl font-bold text-blue-900 mb-6 pb-4 border-b-2 border-blue-900">
                    <i class="fas fa-quote-left me-3"></i>Testimoni
                </h2>
                <div class="space-y-4">
                    <div>
                        <label for="testimonial_text" class="block text-sm font-bold text-blue-900 mb-2">Teks Testimoni</label>
                        <textarea class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('testimonial_text') border-red-500 @enderror" id="testimonial_text" name="testimonial_text" rows="3" required>{{ $about->testimonial_text ?? '' }}</textarea>
                        @error('testimonial_text')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="founder_name" class="block text-sm font-bold text-blue-900 mb-2">Nama Pemberi Testimoni</label>
                            <input type="text" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('founder_name') border-red-500 @enderror" id="founder_name" name="founder_name" value="{{ $about->founder_name ?? '' }}" required>
                            @error('founder_name')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                        </div>
                        <div>
                            <label for="founder_position" class="block text-sm font-bold text-blue-900 mb-2">Posisi/Jabatan</label>
                            <input type="text" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('founder_position') border-red-500 @enderror" id="founder_position" name="founder_position" value="{{ $about->founder_position ?? '' }}" required>
                            @error('founder_position')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                        </div>
                        <div>
                            <label for="founder_linkedin" class="block text-sm font-bold text-blue-900 mb-2">LinkedIn URL</label>
                            <input type="url" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('founder_linkedin') border-red-500 @enderror" id="founder_linkedin" name="founder_linkedin" value="{{ $about->founder_linkedin ?? '' }}">
                            @error('founder_linkedin')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                        </div>
                        <div>
                            <label for="founder_twitter" class="block text-sm font-bold text-blue-900 mb-2">Twitter URL</label>
                            <input type="url" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('founder_twitter') border-red-500 @enderror" id="founder_twitter" name="founder_twitter" value="{{ $about->founder_twitter ?? '' }}">
                            @error('founder_twitter')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- KOLABORASI -->
            <div class="bg-white rounded-xl shadow-sm p-8">
                <h2 class="text-2xl font-bold text-blue-900 mb-6 pb-4 border-b-2 border-blue-900">
                    <i class="fas fa-handshake me-3"></i>Kolaborasi
                </h2>
                <div class="space-y-4">
                    <div>
                        <label for="collaboration_title" class="block text-sm font-bold text-blue-900 mb-2">Judul Kolaborasi</label>
                        <input type="text" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('collaboration_title') border-red-500 @enderror" id="collaboration_title" name="collaboration_title" value="{{ $about->collaboration_title ?? '' }}" required>
                        @error('collaboration_title')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                    <div>
                        <label for="collaboration_desc" class="block text-sm font-bold text-blue-900 mb-2">Deskripsi Kolaborasi</label>
                        <textarea class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('collaboration_desc') border-red-500 @enderror" id="collaboration_desc" name="collaboration_desc" rows="3" required>{{ $about->collaboration_desc ?? '' }}</textarea>
                        @error('collaboration_desc')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <!-- BUTTONS -->
            <div class="flex flex-wrap gap-3 pt-4">
                <button type="submit" class="px-6 py-3 bg-blue-900 text-white font-bold rounded-lg hover:bg-blue-800 transition-all">
                    <i class="fas fa-save me-2"></i> Simpan Perubahan
                </button>
                <a href="/" class="px-6 py-3 bg-gray-600 text-white font-bold rounded-lg hover:bg-gray-700 transition-all">
                    <i class="fas fa-arrow-left me-2"></i> Batal
                </a>
                <a href="/about" target="_blank" class="px-6 py-3 bg-green-600 text-white font-bold rounded-lg hover:bg-green-700 transition-all">
                    <i class="fas fa-eye me-2"></i> Lihat Halaman About
                </a>
            </div>
        </form>
    </div>
</div>

@endsection
