@extends('layouts.app')

@section('content')

<section class="relative bg-gradient-to-r from-blue-900 to-blue-800 text-white py-24 overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
    <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full blur-3xl -mr-16 -mt-16"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
        <span class="text-gold-400 font-bold tracking-widest uppercase text-sm mb-2 block">{{ $about->subtitle ?? 'Tentang Kami' }}</span>
        <h1 class="text-4xl md:text-6xl font-bold mb-6">
            @php
                $title = $about->title ?? 'Membangun Masa Depan <br><span class="text-gold-400">Finansial Indonesia</span>';
                echo $title;
            @endphp
        </h1>
        <p class="text-xl text-blue-100 max-w-2xl mx-auto leading-relaxed">
            {{ $about->description ?? 'Maneki hadir sebagai jembatan antara masyarakat dan kebebasan finansial melalui edukasi yang jujur, transparan, dan mudah diakses.' }}
        </p>
    </div>
</section>

<div class="bg-blue-900 border-t border-blue-800 relative z-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 divide-x divide-blue-800 border-b border-blue-800">
            <div class="py-8 text-center">
                <p class="text-3xl md:text-4xl font-bold text-white mb-1">{{ $about->founded_year ?? '2020' }}</p>
                <p class="text-blue-300 text-sm uppercase tracking-wide">Tahun Berdiri</p>
            </div>
            <div class="py-8 text-center">
                <p class="text-3xl md:text-4xl font-bold text-white mb-1">{{ $about->active_users ?? '100K+' }}</p>
                <p class="text-blue-300 text-sm uppercase tracking-wide">Pengguna Aktif</p>
            </div>
            <div class="py-8 text-center">
                <p class="text-3xl md:text-4xl font-bold text-white mb-1">{{ $about->materials ?? '500+' }}</p>
                <p class="text-blue-300 text-sm uppercase tracking-wide">Materi Edukasi</p>
            </div>
            <div class="py-8 text-center">
                <p class="text-3xl md:text-4xl font-bold text-white mb-1">{{ $about->free_access ?? '100%' }}</p>
                <p class="text-blue-300 text-sm uppercase tracking-wide">Gratis Akses</p>
            </div>
        </div>
    </div>
</div>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="relative">
                <div class="absolute inset-0 bg-gold-500 rounded-2xl transform rotate-3 opacity-20"></div>
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80" alt="Our Story" class="relative rounded-2xl shadow-2xl w-full object-cover h-[500px]">
                <div class="absolute -bottom-6 -right-6 bg-white p-6 rounded-xl shadow-xl border-l-4 border-blue-900 max-w-xs hidden md:block">
                    <p class="text-gray-600 italic text-sm">"Literasi keuangan adalah hak setiap orang, bukan privilege segelintir orang."</p>
                </div>
            </div>

            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-6">{{ $about->story_title ?? 'Sebuah Perjalanan' }} <br>Menuju <span class="text-gold-500">Inklusi Keuangan</span></h2>
                <div class="space-y-6 text-gray-600 leading-relaxed text-lg">
                    @php
                        $content = $about->story_content ?? 'Maneki lahir di tahun 2020, di tengah ketidakpastian ekonomi global. Saat itu, kami melihat satu masalah mendasar: <strong>banyak orang ingin berinvestasi, tapi bingung harus mulai dari mana.</strong><br><br>Didorong oleh data rendahnya literasi keuangan di Indonesia, kami memulai misi sederhana: menerjemahkan bahasa keuangan yang rumit menjadi materi yang bisa dimengerti oleh siapa saja, dari mahasiswa hingga pensiunan.<br><br>Hari ini, Maneki telah berkembang menjadi ekosistem belajar. Kami bukan sekadar blog, kami adalah partner perjalanan finansial Anda menuju kemandirian ekonomi.';
                        // Convert br tags to paragraphs
                        $paragraphs = array_filter(array_map('trim', explode('<br>', $content)));
                        foreach($paragraphs as $para) {
                            echo '<p>' . $para . '</p>';
                        }
                    @endphp
                </div>

                <div class="mt-8 pt-8 border-t border-gray-100 flex gap-8">
                    <div>
                        <h4 class="font-bold text-blue-900 text-lg">Misi</h4>
                        <p class="text-sm text-gray-500 mt-1">{{ $about->mission ?? 'Edukasi tanpa batasan biaya & akses.' }}</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-blue-900 text-lg">Visi</h4>
                        <p class="text-sm text-gray-500 mt-1">{{ $about->vision ?? 'Masyarakat Indonesia melek finansial.' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-blue-900 mb-4">Nilai-Nilai Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Prinsip yang menjadi landasan setiap konten dan fitur yang kami buat di Maneki.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border-t-4 border-blue-900">
                <div class="w-14 h-14 bg-blue-50 rounded-lg flex items-center justify-center mb-6 text-blue-900 text-2xl">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">{{ $about->value1_title ?? 'Integritas' }}</h3>
                <p class="text-gray-500">{{ $about->value1_desc ?? 'Kami hanya menyajikan data yang valid dan strategi yang teruji. Tidak ada janji cepat kaya atau promosi investasi bodong.' }}</p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border-t-4 border-gold-500">
                <div class="w-14 h-14 bg-gold-50 rounded-lg flex items-center justify-center mb-6 text-gold-600 text-2xl">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">{{ $about->value2_title ?? 'Sederhana' }}</h3>
                <p class="text-gray-500">{{ $about->value2_desc ?? 'Keuangan itu rumit, tugas kami membuatnya sederhana. Kami menghindari jargon yang membingungkan pemula.' }}</p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border-t-4 border-blue-900">
                <div class="w-14 h-14 bg-blue-50 rounded-lg flex items-center justify-center mb-6 text-blue-900 text-2xl">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">{{ $about->value3_title ?? 'Inklusif' }}</h3>
                <p class="text-gray-500">{{ $about->value3_desc ?? 'Pendidikan keuangan adalah hak semua orang. Materi kami dirancang gratis dan dapat diakses oleh semua lapisan masyarakat.' }}</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-blue-900 rounded-3xl overflow-hidden shadow-2xl">
            <div class="grid grid-cols-1 lg:grid-cols-12">
                <div class="lg:col-span-5 relative h-96 lg:h-auto">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=800&q=80" alt="Budi Santoso" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-blue-900/20 mix-blend-multiply"></div>
                </div>

                <div class="lg:col-span-7 p-10 md:p-16 flex flex-col justify-center">
                    <i class="fas fa-quote-left text-gold-500 text-4xl mb-6 opacity-50"></i>
                    <h3 class="text-2xl md:text-3xl font-bold text-white mb-6 leading-relaxed">
                        "{{ $about->testimonial_text ?? 'Saya mendirikan Maneki karena lelah melihat teman-teman saya terjerat pinjol dan investasi bodong hanya karena ketidaktahuan. Kami ingin memutus rantai itu.' }}"
                    </h3>

                    <div class="flex items-center gap-4 mt-4">
                        <div>
                            <p class="text-gold-400 font-bold text-xl">{{ $about->founder_name ?? 'Budi Santoso, CFA' }}</p>
                            <p class="text-blue-200 text-sm">{{ $about->founder_position ?? 'Founder & CEO Maneki' }}</p>
                        </div>
                        <div class="h-px bg-blue-700 flex-1 ml-4"></div>
                        <div class="flex gap-3 text-white">
                            @if($about->founder_linkedin)
                                <a href="{{ $about->founder_linkedin }}" class="hover:text-gold-400 transition-colors"><i class="fab fa-linkedin text-xl"></i></a>
                            @endif
                            @if($about->founder_twitter)
                                <a href="{{ $about->founder_twitter }}" class="hover:text-gold-400 transition-colors"><i class="fab fa-twitter text-xl"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50 text-center">
    <div class="max-w-3xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-blue-900 mb-6">{{ $about->collaboration_title ?? 'Ingin Berkolaborasi?' }}</h2>
        <p class="text-gray-600 mb-8 text-lg">{{ $about->collaboration_desc ?? 'Kami selalu terbuka untuk kerjasama dengan institusi pendidikan, perusahaan, atau komunitas.' }}</p>
        <a href="{{ route('contact') }}" class="inline-block bg-gold-500 hover:bg-gold-600 text-blue-900 font-bold py-3 px-8 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
            Hubungi Tim Kami
        </a>
    </div>
</section>

@endsection
