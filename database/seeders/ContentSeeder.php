<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutContent;
use App\Models\FooterContent;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create default About Content
        AboutContent::firstOrCreate(['id' => 1], [
            'title' => 'Membangun Masa Depan <br><span class="text-gold-400">Finansial Indonesia</span>',
            'subtitle' => 'Tentang Kami',
            'description' => 'Maneki hadir sebagai jembatan antara masyarakat dan kebebasan finansial melalui edukasi yang jujur, transparan, dan mudah diakses.',
            'founded_year' => '2020',
            'active_users' => '100K+',
            'materials' => '500+',
            'free_access' => '100%',
            'story_title' => 'Sebuah Perjalanan',
            'story_content' => 'Maneki lahir di tahun 2020, di tengah ketidakpastian ekonomi global. Saat itu, kami melihat satu masalah mendasar: <strong>banyak orang ingin berinvestasi, tapi bingung harus mulai dari mana.</strong><br><br>Didorong oleh data rendahnya literasi keuangan di Indonesia, kami memulai misi sederhana: menerjemahkan bahasa keuangan yang rumit menjadi materi yang bisa dimengerti oleh siapa saja, dari mahasiswa hingga pensiunan.<br><br>Hari ini, Maneki telah berkembang menjadi ekosistem belajar. Kami bukan sekadar blog, kami adalah partner perjalanan finansial Anda menuju kemandirian ekonomi.',
            'mission' => 'Edukasi tanpa batasan biaya & akses.',
            'vision' => 'Masyarakat Indonesia melek finansial.',
            'value1_title' => 'Integritas',
            'value1_desc' => 'Kami hanya menyajikan data yang valid dan strategi yang teruji. Tidak ada janji cepat kaya atau promosi investasi bodong.',
            'value2_title' => 'Sederhana',
            'value2_desc' => 'Keuangan itu rumit, tugas kami membuatnya sederhana. Kami menghindari jargon yang membingungkan pemula.',
            'value3_title' => 'Inklusif',
            'value3_desc' => 'Pendidikan keuangan adalah hak semua orang. Materi kami dirancang gratis dan dapat diakses oleh semua lapisan masyarakat.',
            'testimonial_text' => 'Saya mendirikan Maneki karena lelah melihat teman-teman saya terjerat pinjol dan investasi bodong hanya karena ketidaktahuan. Kami ingin memutus rantai itu.',
            'founder_name' => 'Budi Santoso, CFA',
            'founder_position' => 'Founder & CEO Maneki',
            'founder_linkedin' => '#',
            'founder_twitter' => '#',
            'collaboration_title' => 'Ingin Berkolaborasi?',
            'collaboration_desc' => 'Kami selalu terbuka untuk kerjasama dengan institusi pendidikan, perusahaan, atau komunitas.',
        ]);

        // Create default Footer Content
        FooterContent::firstOrCreate(['id' => 1], [
            'description' => 'Maneki adalah platform edukasi keuangan gratis yang membantu Anda memahami investasi, tabungan, dan literasi finansial dengan cara yang mudah dipahami.',
            'facebook_url' => 'https://facebook.com/manekifinance',
            'twitter_url' => 'https://twitter.com/manekifinance',
            'instagram_url' => 'https://instagram.com/manekifinance',
            'linkedin_url' => 'https://linkedin.com/company/manekifinance',
            'youtube_url' => 'https://youtube.com/@manekifinance',
            'phone' => '+62 21 xxxx xxxx',
            'email' => 'hello@maneki.com',
            'address' => 'Jakarta, Indonesia',
            'quick_links' => json_encode([
                ['title' => 'Home', 'url' => '/'],
                ['title' => 'About', 'url' => '/about'],
                ['title' => 'Contact', 'url' => '/contact'],
                ['title' => 'Education', 'url' => '/education'],
            ]),
            'resources_links' => json_encode([
                ['title' => 'Blog', 'url' => '#'],
                ['title' => 'Tutorial', 'url' => '#'],
                ['title' => 'FAQ', 'url' => '#'],
                ['title' => 'Tools', 'url' => '#'],
            ]),
            'legal_links' => json_encode([
                ['title' => 'Privacy Policy', 'url' => '#'],
                ['title' => 'Terms of Service', 'url' => '#'],
                ['title' => 'Cookie Policy', 'url' => '#'],
            ]),
            'copyright_text' => '© 2024 Maneki. All rights reserved.',
        ]);
    }
}
