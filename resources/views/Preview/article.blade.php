@extends('layouts.app')

@section('content')

<div class="fixed top-0 left-0 w-full h-1 z-50 bg-gray-200">
    <div id="progressBar" class="h-full bg-gold-500 w-0 transition-all duration-150"></div>
</div>

<div class="bg-white pt-24 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

            <div class="hidden lg:block lg:col-span-1">
                <div class="sticky top-32 flex flex-col gap-6 items-center border-r border-gray-100 pr-6 h-full">
                    <div class="flex flex-col gap-4">
                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest text-center" style="writing-mode: vertical-rl;">Share</span>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-50 text-gray-600 flex items-center justify-center hover:bg-blue-600 hover:text-white transition-all"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-50 text-gray-600 flex items-center justify-center hover:bg-green-500 hover:text-white transition-all"><i class="fab fa-whatsapp"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-50 text-gray-600 flex items-center justify-center hover:bg-blue-700 hover:text-white transition-all"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-50 text-gray-600 flex items-center justify-center hover:bg-black hover:text-white transition-all"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-8">

                <header class="mb-10">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-6 font-medium">
                        <a href="{{ route('home') }}" class="hover:text-blue-600 transition">Home</a>
                        <span class="text-gray-300">/</span>
                        <a href="{{ route('education') }}" class="hover:text-blue-600 transition">Education</a>
                        <span class="text-gray-300">/</span>
                        <span class="text-blue-600 font-bold uppercase tracking-wide">Budgeting</span>
                    </div>

                    <h1 class="text-3xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 mb-6 leading-tight tracking-tight">
                        Panduan Terlengkap: Strategi Membuat Anggaran Bulanan yang Efektif
                    </h1>

                    <p class="text-xl text-gray-500 mb-8 leading-relaxed font-serif">
                        Berhenti bertanya "kemana perginya uangku?" dan mulai atur cashflow Anda dengan metode 50/30/20 yang teruji secara matematis dan psikologis.
                    </p>

                    <div class="flex flex-col md:flex-row md:items-center justify-between py-6 border-y border-gray-100 gap-4">
                        <div class="flex items-center gap-4">
                            <img src="https://i.pravatar.cc/150?img=11" alt="Budi Santoso" class="w-12 h-12 rounded-full border border-gray-200">
                            <div>
                                <p class="font-bold text-gray-900 text-sm">Budi Santoso, CFA</p>
                                <p class="text-gray-500 text-xs">Financial Advisor • 15 Nov 2024</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-6 text-sm text-gray-500 font-medium">
                            <span class="flex items-center gap-2"><i class="far fa-clock text-gold-500"></i> 12 Menit Baca</span>
                            <span class="flex items-center gap-2"><i class="far fa-eye text-blue-500"></i> 2.4k Views</span>
                        </div>
                    </div>
                </header>

                <figure class="mb-12">
                    <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=1200&q=80" alt="Budgeting Strategy" class="w-full h-auto rounded-xl shadow-sm">
                    <figcaption class="mt-3 text-center text-xs text-gray-400 italic">
                        Ilustrasi: Perencanaan Keuangan (Kelly Sikkema / Unsplash)
                    </figcaption>
                </figure>

                <div class="bg-gray-50 rounded-xl p-8 mb-12 border border-gray-200">
                    <h4 class="font-bold text-gray-900 mb-4 text-sm uppercase tracking-wider text-blue-900">
                        Dalam Artikel Ini
                    </h4>
                    <nav class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-3 text-base">
                        <a href="#mindset" class="text-gray-600 hover:text-blue-600 hover:underline transition flex items-start gap-2">
                            <span class="font-bold text-gray-300">01</span> Ubah Mindset Budgeting
                        </a>
                        <a href="#audit" class="text-gray-600 hover:text-blue-600 hover:underline transition flex items-start gap-2">
                            <span class="font-bold text-gray-300">02</span> Audit Cashflow
                        </a>
                        <a href="#metode" class="text-gray-600 hover:text-blue-600 hover:underline transition flex items-start gap-2">
                            <span class="font-bold text-gray-300">03</span> Metode 50/30/20
                        </a>
                        <a href="#tools" class="text-gray-600 hover:text-blue-600 hover:underline transition flex items-start gap-2">
                            <span class="font-bold text-gray-300">04</span> Tools & Aplikasi
                        </a>
                        <a href="#mistakes" class="text-gray-600 hover:text-blue-600 hover:underline transition flex items-start gap-2">
                            <span class="font-bold text-gray-300">05</span> Kesalahan Pemula
                        </a>
                        <a href="#faq" class="text-gray-600 hover:text-blue-600 hover:underline transition flex items-start gap-2">
                            <span class="font-bold text-gray-300">06</span> FAQ
                        </a>
                    </nav>
                </div>

                <article class="prose prose-lg prose-blue max-w-none text-gray-800 leading-loose font-serif">
                    <p class="drop-cap text-xl text-gray-700 font-sans mb-8">
                        <span class="float-left text-6xl font-bold text-gold-500 mr-3 mt-[-10px] font-serif">P</span>ernahkah Anda merasa gaji "numpang lewat"? Tanggal 1 gajian, tanggal 15 saldo ATM sudah menipis, dan di akhir bulan terpaksa mengandalkan kartu kredit atau paylater? Anda tidak sendirian.
                    </p>

                    <p>
                        Data menunjukkan <strong>60% milenial Indonesia</strong> hidup dari gaji ke gaji tanpa memiliki dana darurat yang memadai. Masalahnya bukan pada seberapa besar gaji Anda, tapi seberapa baik sistem pengelolaan yang Anda miliki.
                    </p>

                    <h2 id="mindset" class="text-2xl font-bold text-gray-900 font-sans mt-12 mb-6 scroll-mt-24">1. Ubah Mindset: Budgeting Bukan Pengekangan</h2>
                    <p>
                        Banyak orang malas membuat anggaran karena merasa "dikekang". Mereka berpikir budgeting artinya tidak boleh beli kopi, tidak boleh nonton bioskop. <strong>Itu salah besar.</strong>
                    </p>
                    <p>
                        Budgeting justru memberikan Anda <em>kebebasan</em>. Budgeting adalah tentang memberi tahu uang Anda kemana harus pergi, daripada bertanya-tanya kemana perginya.
                    </p>

                    <div class="border-l-4 border-blue-900 pl-6 py-2 my-10 italic text-xl text-gray-700 bg-gray-50 rounded-r-lg">
                        "Jangan menabung apa yang tersisa setelah belanja, tapi belanjakanlah apa yang tersisa setelah menabung."
                        <div class="mt-2 text-sm font-bold text-gray-900 not-italic uppercase tracking-wide">— Warren Buffett</div>
                    </div>

                    <h2 id="audit" class="text-2xl font-bold text-gray-900 font-sans mt-12 mb-6 scroll-mt-24">2. Langkah Awal: Audit Cashflow</h2>
                    <p>
                        Anda tidak bisa memperbaiki apa yang tidak bisa Anda ukur. Sebelum membuat rencana, lakukan audit keuangan selama 30 hari terakhir. Kelompokkan pengeluaran menjadi:
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 not-prose my-8 font-sans">
                        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition">
                            <h4 class="font-bold text-gray-900 mb-2 border-b-2 border-red-500 inline-block pb-1">Fixed Cost</h4>
                            <p class="text-sm text-gray-600 mt-2">Pengeluaran wajib & tetap. Contoh: Sewa kos, KPR, Internet.</p>
                        </div>
                        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition">
                            <h4 class="font-bold text-gray-900 mb-2 border-b-2 border-yellow-500 inline-block pb-1">Variable Cost</h4>
                            <p class="text-sm text-gray-600 mt-2">Wajib tapi berubah-ubah. Contoh: Makan, Listrik, Bensin.</p>
                        </div>
                        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition">
                            <h4 class="font-bold text-gray-900 mb-2 border-b-2 border-green-500 inline-block pb-1">Discretionary</h4>
                            <p class="text-sm text-gray-600 mt-2">Gaya hidup. Contoh: Netflix, Kopi, Belanja baju.</p>
                        </div>
                    </div>

                    <h2 id="metode" class="text-2xl font-bold text-gray-900 font-sans mt-12 mb-6 scroll-mt-24">3. Bedah Metode 50/30/20</h2>
                    <p>
                        Metode ini membagi pendapatan menjadi 50% Kebutuhan, 30% Keinginan, dan 20% Tabungan. Berikut simulasinya untuk gaji Rp 6 Juta:
                    </p>

                    <div class="my-8 not-prose bg-gray-900 text-white rounded-xl p-8 font-sans shadow-2xl">
                        <div class="flex justify-between items-end mb-6 border-b border-gray-700 pb-4">
                            <div>
                                <h4 class="text-lg font-bold text-gold-400">Simulasi Gaji Rp 6.000.000</h4>
                                <p class="text-sm text-gray-400">Alokasi Bulanan</p>
                            </div>
                            <i class="fas fa-chart-pie text-3xl text-gray-700"></i>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="font-bold">50% Needs</span>
                                    <span>Rp 3.000.000</span>
                                </div>
                                <div class="h-3 bg-gray-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-blue-500 w-1/2"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="font-bold">30% Wants</span>
                                    <span>Rp 1.800.000</span>
                                </div>
                                <div class="h-3 bg-gray-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-purple-500 w-[30%]"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="font-bold">20% Savings</span>
                                    <span>Rp 1.200.000</span>
                                </div>
                                <div class="h-3 bg-gray-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-green-500 w-[20%]"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 id="mistakes" class="text-2xl font-bold text-gray-900 font-sans mt-12 mb-6 scroll-mt-24">5. Kesalahan Fatal Pemula</h2>
                    <ul class="list-none pl-0 space-y-4">
                        <li class="flex gap-4">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center font-bold">1</span>
                            <div>
                                <strong>Terlalu Ketat di Awal.</strong> Memotong budget makan 70% sekaligus akan membuat Anda "balas dendam" di bulan berikutnya.
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center font-bold">2</span>
                            <div>
                                <strong>Lupa Pengeluaran Tahunan.</strong> Pajak motor atau servis mobil sering lupa dianggarkan.
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center font-bold">3</span>
                            <div>
                                <strong>Lifestyle Inflation.</strong> Gaji naik, gaya hidup ikut naik. Harusnya selisih kenaikan gaji ditabung.
                            </div>
                        </li>
                    </ul>

                    <div class="bg-blue-50 border-l-4 border-blue-600 p-8 my-12 rounded-r-xl not-prose font-sans">
                        <h4 class="font-bold text-blue-900 text-xl mb-3">🚀 Challenge Minggu Ini</h4>
                        <p class="text-gray-700 mb-6">
                            Coba lakukan <strong>"No Spend Day"</strong> selama satu hari dalam minggu ini. Di hari itu, Anda tidak boleh mengeluarkan uang sepeserpun (kecuali ongkos kerja wajib).
                        </p>
                        <button class="bg-blue-900 text-white px-6 py-3 rounded-lg font-bold hover:bg-blue-800 transition shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                            Saya Terima Tantangannya!
                        </button>
                    </div>

                </article>

                <div id="faq" class="mt-16 pt-10 border-t border-gray-200 scroll-mt-24">
                    <h3 class="text-2xl font-bold text-gray-900 mb-8">Pertanyaan Umum (FAQ)</h3>

                    <div class="space-y-4">
                        <details class="group bg-white border border-gray-200 rounded-xl p-6 cursor-pointer hover:border-blue-300 transition-colors">
                            <summary class="flex justify-between items-center font-bold text-gray-900 list-none">
                                Berapa besar dana darurat yang ideal?
                                <span class="transition group-open:rotate-180 text-gray-400"><i class="fas fa-chevron-down"></i></span>
                            </summary>
                            <p class="text-gray-600 mt-4 text-sm leading-relaxed border-t border-gray-100 pt-4">
                                Untuk lajang (single), idealnya 3-6 kali pengeluaran bulanan. Untuk yang sudah berkeluarga, minimal 6-12 kali pengeluaran bulanan. Simpan di instrumen likuid seperti Reksadana Pasar Uang.
                            </p>
                        </details>

                        <details class="group bg-white border border-gray-200 rounded-xl p-6 cursor-pointer hover:border-blue-300 transition-colors">
                            <summary class="flex justify-between items-center font-bold text-gray-900 list-none">
                                Lebih baik bayar utang dulu atau investasi?
                                <span class="transition group-open:rotate-180 text-gray-400"><i class="fas fa-chevron-down"></i></span>
                            </summary>
                            <p class="text-gray-600 mt-4 text-sm leading-relaxed border-t border-gray-100 pt-4">
                                Bayar utang konsumtif (bunga tinggi seperti Pinjol/Kartu Kredit) adalah prioritas MUTLAK. Jangan investasi jika masih punya utang berbunga >10% per tahun.
                            </p>
                        </details>
                    </div>
                </div>

                <div class="mt-16 bg-gray-50 rounded-2xl p-8 flex flex-col md:flex-row gap-6 items-center md:items-start text-center md:text-left border border-gray-100">
                    <img src="https://i.pravatar.cc/150?img=11" class="w-20 h-20 rounded-full border-4 border-white shadow-sm">
                    <div>
                        <div class="flex items-center justify-center md:justify-start gap-2 mb-2">
                            <h4 class="text-lg font-bold text-gray-900">Budi Santoso, CFA</h4>
                            <span class="bg-blue-100 text-blue-700 text-xs font-bold px-2 py-0.5 rounded">Verified</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                            Financial Advisor bersertifikat dengan pengalaman 15 tahun. Spesialisasi dalam manajemen utang dan perencanaan pensiun.
                        </p>
                        <div class="flex justify-center md:justify-start gap-4">
                            <a href="#" class="text-gray-400 hover:text-blue-600"><i class="fab fa-linkedin text-lg"></i></a>
                            <a href="#" class="text-gray-400 hover:text-blue-400"><i class="fab fa-twitter text-lg"></i></a>
                            <a href="#" class="text-gray-400 hover:text-gray-900 font-bold text-sm">Lihat Profil Lengkap →</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="lg:col-span-3 space-y-8">
                <div class="sticky top-32 space-y-8">

                    <div class="relative">
                        <input type="text" placeholder="Cari di artikel ini..." class="w-full pl-4 pr-10 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all">
                        <i class="fas fa-search absolute right-3 top-3.5 text-gray-400"></i>
                    </div>

                    <div class="bg-white border border-gray-100 rounded-xl p-6 shadow-sm">
                        <h4 class="font-bold text-gray-900 mb-6 text-sm uppercase tracking-wider">Artikel Populer</h4>
                        <div class="space-y-6">
                            <a href="#" class="group flex gap-4">
                                <span class="text-2xl font-bold text-gray-200 group-hover:text-gold-500 transition font-serif italic">1</span>
                                <div>
                                    <h5 class="text-sm font-bold text-gray-700 group-hover:text-blue-600 transition leading-snug">Cara Investasi Emas Bagi Pemula (Update 2025)</h5>
                                </div>
                            </a>
                            <a href="#" class="group flex gap-4">
                                <span class="text-2xl font-bold text-gray-200 group-hover:text-gold-500 transition font-serif italic">2</span>
                                <div>
                                    <h5 class="text-sm font-bold text-gray-700 group-hover:text-blue-600 transition leading-snug">Review 5 Aplikasi Reksadana Terbaik</h5>
                                </div>
                            </a>
                            <a href="#" class="group flex gap-4">
                                <span class="text-2xl font-bold text-gray-200 group-hover:text-gold-500 transition font-serif italic">3</span>
                                <div>
                                    <h5 class="text-sm font-bold text-gray-700 group-hover:text-blue-600 transition leading-snug">Jebakan Pinjol Ilegal & Solusinya</h5>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="bg-blue-900 rounded-xl p-6 text-white text-center relative overflow-hidden group">
                        <div class="absolute inset-0 bg-blue-800 transform scale-y-0 group-hover:scale-y-100 transition-transform origin-bottom duration-500"></div>
                        <div class="relative z-10">
                            <i class="far fa-paper-plane text-3xl text-gold-500 mb-4"></i>
                            <h4 class="font-bold mb-2">Weekly Insight</h4>
                            <p class="text-xs text-blue-200 mb-4">Dapatkan tips keuangan langsung ke inbox Anda.</p>
                            <input type="email" placeholder="Email Anda" class="w-full px-3 py-2 rounded text-gray-900 text-sm mb-2 focus:outline-none">
                            <button class="w-full bg-gold-500 hover:bg-gold-600 text-blue-900 font-bold py-2 rounded text-sm transition">Subscribe</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<script>
    // Progress Bar Script
    window.onscroll = function() {
        myFunction()
    };

    function myFunction() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("progressBar").style.width = scrolled + "%";
    }
</script>

@endsection