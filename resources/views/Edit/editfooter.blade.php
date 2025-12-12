@extends('layouts.app')

@section('content')

<section class="relative bg-gradient-to-r from-blue-900 to-blue-800 text-white py-16 overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-2">Edit Halaman Footer</h1>
        <p class="text-xl text-blue-100">Ubah konten footer dan lihat perubahannya di halaman</p>
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

        <form action="{{ route('content.updateFooter') }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- ABOUT SECTION -->
            <div class="bg-white rounded-xl shadow-sm p-8">
                <h2 class="text-2xl font-bold text-blue-900 mb-6 pb-4 border-b-2 border-blue-900">
                    <i class="fas fa-info-circle me-3"></i>Tentang Kami
                </h2>
                <div class="space-y-4">
                    <div>
                        <label for="description" class="block text-sm font-bold text-blue-900 mb-2">Deskripsi Perusahaan</label>
                        <textarea class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('description') border-red-500 @enderror" 
                                  id="description" name="description" rows="4" required>{{ $footer->description ?? '' }}</textarea>
                        @error('description')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <!-- CONTACT INFORMATION -->
            <div class="bg-white rounded-xl shadow-sm p-8">
                <h2 class="text-2xl font-bold text-blue-900 mb-6 pb-4 border-b-2 border-blue-900">
                    <i class="fas fa-phone me-3"></i>Informasi Kontak
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="phone" class="block text-sm font-bold text-blue-900 mb-2">Nomor Telepon</label>
                        <input type="text" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('phone') border-red-500 @enderror" 
                               id="phone" name="phone" value="{{ $footer->phone ?? '' }}" 
                               placeholder="+62 21 xxxx xxxx">
                        @error('phone')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-bold text-blue-900 mb-2">Email</label>
                        <input type="email" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('email') border-red-500 @enderror" 
                               id="email" name="email" value="{{ $footer->email ?? '' }}" 
                               placeholder="hello@maneki.com">
                        @error('email')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                    <div class="md:col-span-2">
                        <label for="address" class="block text-sm font-bold text-blue-900 mb-2">Alamat</label>
                        <textarea class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('address') border-red-500 @enderror" 
                                  id="address" name="address" rows="2">{{ $footer->address ?? '' }}</textarea>
                        @error('address')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <!-- SOCIAL MEDIA LINKS -->
            <div class="bg-white rounded-xl shadow-sm p-8">
                <h2 class="text-2xl font-bold text-blue-900 mb-6 pb-4 border-b-2 border-blue-900">
                    <i class="fas fa-share-alt me-3"></i>Media Sosial
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="facebook_url" class="block text-sm font-bold text-blue-900 mb-2">
                            <i class="fab fa-facebook me-2"></i>Facebook URL
                        </label>
                        <input type="url" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('facebook_url') border-red-500 @enderror" 
                               id="facebook_url" name="facebook_url" value="{{ $footer->facebook_url ?? '' }}" 
                               placeholder="https://facebook.com/...">
                        @error('facebook_url')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                    <div>
                        <label for="twitter_url" class="block text-sm font-bold text-blue-900 mb-2">
                            <i class="fab fa-twitter me-2"></i>Twitter URL
                        </label>
                        <input type="url" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('twitter_url') border-red-500 @enderror" 
                               id="twitter_url" name="twitter_url" value="{{ $footer->twitter_url ?? '' }}" 
                               placeholder="https://twitter.com/...">
                        @error('twitter_url')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                    <div>
                        <label for="instagram_url" class="block text-sm font-bold text-blue-900 mb-2">
                            <i class="fab fa-instagram me-2"></i>Instagram URL
                        </label>
                        <input type="url" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('instagram_url') border-red-500 @enderror" 
                               id="instagram_url" name="instagram_url" value="{{ $footer->instagram_url ?? '' }}" 
                               placeholder="https://instagram.com/...">
                        @error('instagram_url')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                    <div>
                        <label for="linkedin_url" class="block text-sm font-bold text-blue-900 mb-2">
                            <i class="fab fa-linkedin me-2"></i>LinkedIn URL
                        </label>
                        <input type="url" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('linkedin_url') border-red-500 @enderror" 
                               id="linkedin_url" name="linkedin_url" value="{{ $footer->linkedin_url ?? '' }}" 
                               placeholder="https://linkedin.com/...">
                        @error('linkedin_url')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                    <div>
                        <label for="youtube_url" class="block text-sm font-bold text-blue-900 mb-2">
                            <i class="fab fa-youtube me-2"></i>YouTube URL
                        </label>
                        <input type="url" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('youtube_url') border-red-500 @enderror" 
                               id="youtube_url" name="youtube_url" value="{{ $footer->youtube_url ?? '' }}" 
                               placeholder="https://youtube.com/...">
                        @error('youtube_url')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <!-- QUICK LINKS (JSON) -->
            <div class="bg-white rounded-xl shadow-sm p-8">
                <h2 class="text-2xl font-bold text-blue-900 mb-6 pb-4 border-b-2 border-blue-900">
                    <i class="fas fa-link me-3"></i>Quick Links
                </h2>
                <div class="space-y-4">
                    <div>
                        <label for="quick_links" class="block text-sm font-bold text-blue-900 mb-2">Format JSON</label>
                        <textarea class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 font-mono text-sm @error('quick_links') border-red-500 @enderror" 
                                  id="quick_links" name="quick_links" rows="5">{{ $footer->quick_links ? json_encode($footer->quick_links, JSON_PRETTY_PRINT) : '[]' }}</textarea>
                        <p class="text-xs text-gray-500 mt-2">Contoh: [{"title": "Home", "url": "/"}, {"title": "About", "url": "/about"}]</p>
                        @error('quick_links')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <!-- RESOURCES LINKS (JSON) -->
            <div class="bg-white rounded-xl shadow-sm p-8">
                <h2 class="text-2xl font-bold text-blue-900 mb-6 pb-4 border-b-2 border-blue-900">
                    <i class="fas fa-book me-3"></i>Resources Links
                </h2>
                <div class="space-y-4">
                    <div>
                        <label for="resources_links" class="block text-sm font-bold text-blue-900 mb-2">Format JSON</label>
                        <textarea class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 font-mono text-sm @error('resources_links') border-red-500 @enderror" 
                                  id="resources_links" name="resources_links" rows="5">{{ $footer->resources_links ? json_encode($footer->resources_links, JSON_PRETTY_PRINT) : '[]' }}</textarea>
                        <p class="text-xs text-gray-500 mt-2">Contoh: [{"title": "Blog", "url": "/blog"}, {"title": "Tutorial", "url": "/tutorial"}]</p>
                        @error('resources_links')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <!-- LEGAL LINKS (JSON) -->
            <div class="bg-white rounded-xl shadow-sm p-8">
                <h2 class="text-2xl font-bold text-blue-900 mb-6 pb-4 border-b-2 border-blue-900">
                    <i class="fas fa-gavel me-3"></i>Legal Links
                </h2>
                <div class="space-y-4">
                    <div>
                        <label for="legal_links" class="block text-sm font-bold text-blue-900 mb-2">Format JSON</label>
                        <textarea class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 font-mono text-sm @error('legal_links') border-red-500 @enderror" 
                                  id="legal_links" name="legal_links" rows="5">{{ $footer->legal_links ? json_encode($footer->legal_links, JSON_PRETTY_PRINT) : '[]' }}</textarea>
                        <p class="text-xs text-gray-500 mt-2">Contoh: [{"title": "Privacy Policy", "url": "/privacy"}, {"title": "Terms", "url": "/terms"}]</p>
                        @error('legal_links')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <!-- COPYRIGHT -->
            <div class="bg-white rounded-xl shadow-sm p-8">
                <h2 class="text-2xl font-bold text-blue-900 mb-6 pb-4 border-b-2 border-blue-900">
                    <i class="fas fa-copyright me-3"></i>Copyright
                </h2>
                <div class="space-y-4">
                    <div>
                        <label for="copyright_text" class="block text-sm font-bold text-blue-900 mb-2">Teks Copyright</label>
                        <input type="text" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-900 @error('copyright_text') border-red-500 @enderror" 
                               id="copyright_text" name="copyright_text" value="{{ $footer->copyright_text ?? '' }}" 
                               placeholder="© 2024 Maneki. All rights reserved." required>
                        @error('copyright_text')<span class="text-red-600 text-sm">{{ $message }}</span>@enderror
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
                <a href="/" target="_blank" class="px-6 py-3 bg-green-600 text-white font-bold rounded-lg hover:bg-green-700 transition-all">
                    <i class="fas fa-eye me-2"></i> Lihat Halaman Home
                </a>
            </div>
        </form>
    </div>
</div>

@endsection
