@extends('layouts.app')

@section('content')

<section class="relative bg-gradient-to-r from-blue-900 to-blue-700 text-white pt-24 pb-32 overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
    <div class="absolute top-0 right-0 w-64 h-64 bg-gold-500 opacity-10 rounded-full blur-3xl -mr-16 -mt-16"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
        <span class="text-gold-400 font-bold tracking-widest uppercase text-xs mb-2 block">Pusat Bantuan</span>
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Hubungi Kami</h1>
        <p class="text-xl text-blue-100 max-w-2xl mx-auto">
            Tim support Maneki siap membantu perjalanan finansial Anda 24/7.
        </p>
    </div>
</section>

<section class="relative z-20 -mt-20 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <div class="lg:col-span-1 space-y-6">

                <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-100">
                    <h3 class="text-xl font-bold text-blue-900 mb-6 border-l-4 border-gold-500 pl-3">Kontak Resmi</h3>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0 text-blue-600">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 uppercase font-bold tracking-wider">Kantor</p>
                                <p class="text-gray-800 text-sm mt-1 leading-relaxed">Menara Sudirman Lt. 15<br>Jakarta Selatan, 12190</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0 text-blue-600">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 uppercase font-bold tracking-wider">Telepon</p>
                                <p class="text-gray-800 font-bold mt-1">+62 21 500-MANEKI</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0 text-blue-600">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 uppercase font-bold tracking-wider">Email</p>
                                <p class="text-gray-800 font-bold mt-1">support@maneki.id</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <a href="#" class="bg-white p-4 rounded-xl shadow-md border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all group text-center">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-2 group-hover:bg-green-500 transition-colors">
                            <i class="fas fa-comments text-green-600 group-hover:text-white transition-colors"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 text-sm">Live Chat</h4>
                        <p class="text-xs text-gray-500">Online</p>
                    </a>

                    <a href="#" class="bg-white p-4 rounded-xl shadow-md border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all group text-center">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-2 group-hover:bg-blue-500 transition-colors">
                            <i class="fas fa-video text-blue-600 group-hover:text-white transition-colors"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 text-sm">Video Call</h4>
                        <p class="text-xs text-gray-500">Book Now</p>
                    </a>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-2 h-48 overflow-hidden border border-gray-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3079941957267!2d106.80669231476915!3d-6.223057995495035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f15033d2621d%3A0x6295b9580456e4f3!2sMenara%20Sudirman!5e0!3m2!1sen!2sid!4v1629876543210!5m2!1sen!2sid" width="100%" height="100%" style="border:0; border-radius: 8px;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-xl p-8 md:p-10 border-t-4 border-blue-900">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-900">Kirim Pesan</h2>
                        <p class="text-gray-500 mt-2">Silakan isi formulir di bawah, tim kami akan membalas via email.</p>
                    </div>

                    <form class="space-y-5">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                                <input type="text" class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all placeholder-gray-400" placeholder="Contoh: Budi Santoso">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                                <input type="email" class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all placeholder-gray-400" placeholder="email@anda.com">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Subjek</label>
                            <select class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all text-gray-700">
                                <option>Pertanyaan Umum</option>
                                <option>Kendala Teknis</option>
                                <option>Kerjasama / Partnership</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Pesan</label>
                            <textarea rows="5" class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all placeholder-gray-400" placeholder="Tuliskan pertanyaan Anda di sini..."></textarea>
                        </div>

                        <button type="submit" class="w-full md:w-auto bg-gold-500 hover:bg-gold-600 text-blue-900 font-bold py-3 px-8 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50 border-t border-gray-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-2xl font-bold text-blue-900 mb-2">Pertanyaan Umum (FAQ)</h2>
            <p class="text-gray-600">Jawaban cepat untuk pertanyaan Anda.</p>
        </div>
        <div class="space-y-4">
            <details class="group bg-white rounded-lg shadow-sm border border-gray-200 p-5 cursor-pointer open:ring-1 open:ring-blue-200 transition-all">
                <summary class="flex items-center justify-between font-bold text-gray-800 list-none">
                    Berapa lama respon email dari tim Maneki?
                    <span class="text-blue-500"><i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i></span>
                </summary>
                <p class="mt-3 text-gray-600 text-sm leading-relaxed pl-1">
                    Kami berusaha membalas semua pesan dalam waktu 2 jam selama jam kerja (Senin-Jumat, 08:00 - 17:00 WIB). Di luar jam tersebut, kami akan membalas di hari kerja berikutnya.
                </p>
            </details>

            <details class="group bg-white rounded-lg shadow-sm border border-gray-200 p-5 cursor-pointer open:ring-1 open:ring-blue-200 transition-all">
                <summary class="flex items-center justify-between font-bold text-gray-800 list-none">
                    Apakah ada layanan konsultasi privat?
                    <span class="text-blue-500"><i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i></span>
                </summary>
                <p class="mt-3 text-gray-600 text-sm leading-relaxed pl-1">
                    Saat ini fitur konsultasi 1-on-1 baru tersedia untuk member premium (Coming Soon). Namun, Anda bisa menggunakan fitur Live Chat untuk pertanyaan singkat secara gratis.
                </p>
            </details>
        </div>
    </div>
</section>

<a href="https://wa.me/628123456789" target="_blank" class="fixed bottom-6 right-6 z-50 group">
    <div class="relative">
        <span class="absolute right-full top-1/2 -translate-y-1/2 mr-3 bg-gray-800 text-white px-3 py-1 rounded text-xs font-bold shadow-lg opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none">
            Chat via WhatsApp
        </span>
        <div class="w-14 h-14 bg-[#25D366] rounded-full shadow-xl flex items-center justify-center transform transition-transform duration-300 group-hover:scale-110 hover:rotate-12">
            <i class="fab fa-whatsapp text-white text-3xl"></i>
        </div>
        <div class="absolute inset-0 rounded-full bg-[#25D366] opacity-20 animate-ping"></div>
    </div>
</a>

@endsection