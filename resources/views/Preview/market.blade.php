@extends('layouts.app')

@section('content')

<div class="pt-4 bg-gray-50"></div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-6">
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                {
                    "symbols": [{
                            "proName": "FX_IDC:USDIDR",
                            "title": "USD to IDR"
                        },
                        {
                            "proName": "IDX:COMPOSITE",
                            "title": "IHSG"
                        },
                        {
                            "proName": "BITSTAMP:BTCUSD",
                            "title": "Bitcoin"
                        },
                        {
                            "proName": "OANDA:XAUUSD",
                            "title": "Gold"
                        },
                        {
                            "proName": "NASDAQ:TSLA",
                            "title": "Tesla"
                        }
                    ],
                    "showSymbolLogo": true,
                    "colorTheme": "light",
                    "isTransparent": true,
                    "displayMode": "adaptive",
                    "locale": "id"
                }
            </script>
        </div>
    </div>
</div>

<div class="relative bg-gradient-to-r from-blue-900 to-blue-800 text-white overflow-hidden">
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-white opacity-5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-64 h-64 bg-gold-500 opacity-10 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 pb-32">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
            <div class="max-w-2xl">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 leading-tight">
                    Market <span class="text-gold-400">Insights</span>
                </h1>
                <p class="text-blue-100 text-lg md:text-xl font-light leading-relaxed">
                    Data pasar finansial real-time dan terpercaya untuk keputusan investasi masa depan Anda.
                </p>
            </div>

            <a href="{{ route('home') }}" class="group flex items-center gap-3 px-6 py-3 bg-white/10 hover:bg-white/20 border border-white/20 rounded-full backdrop-blur-sm transition-all duration-300">
                <div class="bg-white/20 p-1.5 rounded-full group-hover:bg-white/30 transition-colors">
                    <i class="fas fa-arrow-left text-sm"></i>
                </div>
                <span class="font-medium tracking-wide">Kembali ke Home</span>
            </a>
        </div>
    </div>
</div>

<div class="relative z-10 -mt-24 pb-20 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 mb-12">

            <div class="lg:col-span-8 bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden flex flex-col h-[600px]">
                <div class="p-6 border-b border-gray-100 bg-gray-50/50 flex justify-between items-center">
                    <h2 class="text-xl font-bold text-gray-800 flex items-center gap-3">
                        <span class="w-2 h-8 bg-gold-500 rounded-full"></span>
                        Tren Pasar (IHSG)
                    </h2>
                    <span class="text-sm text-gray-500 bg-white px-3 py-1 rounded border border-gray-200">Daily Chart</span>
                </div>
                <div class="flex-1 p-2">
                    <div class="tradingview-widget-container" style="height:100%;width:100%">
                        <div class="tradingview-widget-container__widget" style="height:100%;width:100%"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                            {
                                "autosize": true,
                                "symbol": "IDX:COMPOSITE",
                                "interval": "D",
                                "timezone": "Asia/Jakarta",
                                "theme": "light",
                                "style": "1",
                                "locale": "id",
                                "enable_publishing": false,
                                "hide_side_toolbar": false,
                                "allow_symbol_change": true,
                                "calendar": false,
                                "support_host": "https://www.tradingview.com"
                            }
                        </script>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-4 bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden flex flex-col h-[600px]">
                <div class="p-6 border-b border-gray-100 bg-gray-50/50">
                    <h2 class="text-xl font-bold text-gray-800 flex items-center gap-3">
                        <span class="w-2 h-8 bg-blue-600 rounded-full"></span>
                        Berita Terkini
                    </h2>
                </div>
                <div class="flex-1">
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                            {
                                "feedMode": "market",
                                "market": "stock",
                                "colorTheme": "light",
                                "isTransparent": true,
                                "displayMode": "regular",
                                "width": "100%",
                                "height": "100%",
                                "locale": "id"
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-16">
            <div class="flex items-center justify-between mb-8">
                <h3 class="text-2xl font-bold text-gray-800">Saham Blue Chip Indonesia</h3>
                <div class="h-1 w-20 bg-gray-200 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach(['BBCA', 'BBRI', 'TLKM', 'BMRI'] as $stock)
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl border border-gray-100 transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-[180px]">
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                {
                                    "symbol": "IDX:{{ $stock }}",
                                    "width": "100%",
                                    "height": "100%",
                                    "locale": "id",
                                    "dateRange": "12M",
                                    "colorTheme": "light",
                                    "isTransparent": true,
                                    "autosize": true,
                                    "largeChartUrl": ""
                                }
                            </script>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="relative bg-blue-900 rounded-3xl overflow-hidden shadow-2xl mb-16 px-8 py-12 md:px-16">
            <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>

            <div class="relative z-10 text-center max-w-4xl mx-auto">
                <h3 class="text-3xl font-bold text-white mb-12">Wisdom of The Masters</h3>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    <div class="text-center group">
                        <div class="mb-6 relative inline-block">
                            <div class="absolute inset-0 bg-gold-500 blur-lg opacity-20 group-hover:opacity-40 transition-opacity rounded-full"></div>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Warren_Buffett_KU_Visit.jpg/220px-Warren_Buffett_KU_Visit.jpg" class="w-20 h-20 rounded-full border-4 border-white/20 object-cover relative z-10">
                        </div>
                        <p class="text-blue-100 italic mb-4 text-sm leading-relaxed">"Jangan menabung apa yang tersisa setelah belanja, tapi belanjakanlah apa yang tersisa setelah menabung."</p>
                        <p class="text-gold-400 font-bold uppercase tracking-wider text-xs">Warren Buffett</p>
                    </div>

                    <div class="text-center group">
                        <div class="mb-6 relative inline-block">
                            <div class="absolute inset-0 bg-gold-500 blur-lg opacity-20 group-hover:opacity-40 transition-opacity rounded-full"></div>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Robert_Kiyosaki_by_Gage_Skidmore.jpg/220px-Robert_Kiyosaki_by_Gage_Skidmore.jpg" class="w-20 h-20 rounded-full border-4 border-white/20 object-cover relative z-10">
                        </div>
                        <p class="text-blue-100 italic mb-4 text-sm leading-relaxed">"Bukan berapa banyak uang yang kamu hasilkan, tapi berapa banyak uang yang bisa kamu simpan."</p>
                        <p class="text-gold-400 font-bold uppercase tracking-wider text-xs">Robert Kiyosaki</p>
                    </div>

                    <div class="text-center group">
                        <div class="mb-6 relative inline-block">
                            <div class="absolute inset-0 bg-gold-500 blur-lg opacity-20 group-hover:opacity-40 transition-opacity rounded-full"></div>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Sri_Mulyani_Indrawati_HN.jpg/220px-Sri_Mulyani_Indrawati_HN.jpg" class="w-20 h-20 rounded-full border-4 border-white/20 object-cover relative z-10">
                        </div>
                        <p class="text-blue-100 italic mb-4 text-sm leading-relaxed">"Krisis ekonomi mengajarkan pentingnya fondasi yang kuat dan kehati-hatian anggaran."</p>
                        <p class="text-gold-400 font-bold uppercase tracking-wider text-xs">Sri Mulyani</p>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="flex justify-between items-end mb-8">
                <h3 class="text-2xl font-bold text-gray-800">Insight & Analisa Terbaru</h3>
                <a href="{{ route('education') }}" class="text-blue-600 font-semibold hover:text-blue-800 transition-colors">Lihat Semua Artikel &rarr;</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <article class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition-all duration-300 group">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1611974765270-ca1258634369?auto=format&fit=crop&w=500&q=80" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="px-2 py-1 bg-gold-100 text-gold-700 text-xs font-bold rounded">CRYPTO</span>
                            <span class="text-gray-400 text-xs">5 menit baca</span>
                        </div>
                        <h4 class="font-bold text-lg text-gray-800 mb-2 group-hover:text-blue-600 transition-colors">Bitcoin Halving: Peluang atau Jebakan?</h4>
                        <p class="text-gray-500 text-sm mb-4 line-clamp-2">Analisa mendalam mengenai siklus 4 tahunan Bitcoin dan dampak historisnya terhadap harga pasar.</p>
                        <a href="#" class="inline-flex items-center text-blue-600 text-sm font-semibold hover:gap-2 transition-all">Baca Selengkapnya &rarr;</a>
                    </div>
                </article>

                <article class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition-all duration-300 group">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?auto=format&fit=crop&w=500&q=80" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs font-bold rounded">SAHAM</span>
                            <span class="text-gray-400 text-xs">7 menit baca</span>
                        </div>
                        <h4 class="font-bold text-lg text-gray-800 mb-2 group-hover:text-blue-600 transition-colors">Bedah Fundamental BBCA 2025</h4>
                        <p class="text-gray-500 text-sm mb-4 line-clamp-2">Mengupas laporan keuangan terbaru Bank BCA dan proyeksi dividen tahun depan.</p>
                        <a href="#" class="inline-flex items-center text-blue-600 text-sm font-semibold hover:gap-2 transition-all">Baca Selengkapnya &rarr;</a>
                    </div>
                </article>

                <article class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition-all duration-300 group">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?auto=format&fit=crop&w=500&q=80" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="px-2 py-1 bg-green-100 text-green-700 text-xs font-bold rounded">TIPS</span>
                            <span class="text-gray-400 text-xs">4 menit baca</span>
                        </div>
                        <h4 class="font-bold text-lg text-gray-800 mb-2 group-hover:text-blue-600 transition-colors">Emas vs Reksadana: Mana yang Cocok?</h4>
                        <p class="text-gray-500 text-sm mb-4 line-clamp-2">Perbandingan risiko dan return instrumen investasi untuk pemula dengan modal terbatas.</p>
                        <a href="#" class="inline-flex items-center text-blue-600 text-sm font-semibold hover:gap-2 transition-all">Baca Selengkapnya &rarr;</a>
                    </div>
                </article>
            </div>
        </div>

    </div>
</div>

@endsection