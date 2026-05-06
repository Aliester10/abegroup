<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Banner;
use App\Models\AboutSection;
use App\Models\Business;
use App\Models\Company;
use App\Models\CoreValue;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DummyDataSeeder extends Seeder
{
    public function run(): void
    {
        // 1. User Admin
        User::firstOrCreate(
            ['email' => 'admin@abegroup.com'],
            [
                'name' => 'Admin ABE Group',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );

        // 2. Banner / Hero
        Banner::updateOrCreate(
            ['title' => 'Main Hero'],
            [
                'description' => 'MENGINTEGRASIKAN TEKNOLOGI DAN INOVASI UNTUK MENDORONG PERTUMBUHAN BERKELANJUTAN',
                'image' => 'assets/img/create-account-office.jpeg',
                'is_active' => true,
            ]
        );

        // 3. Tentang Kami
        AboutSection::updateOrCreate(
            ['subtitle' => 'Tentang Kami'],
            [
                'title' => 'TENTANG KAMI',
                'content' => 'Didirikan dengan semangat membangun ekosistem bisnis yang kuat, <strong>ABE Group</strong> hadir sebagai entitas induk yang mengintegrasikan berbagai sektor usaha untuk menciptakan sinergi yang optimal.',
                'image' => 'assets/img/login-office.jpeg',
                'is_active' => true,
                'order' => 1,
            ]
        );

        // 4. Unit Bisnis
        $businesses = [
            [
                'name' => 'ARO BASKARA ESA',
                'slug' => 'aro-baskara-esa',
                'category' => 'Engineering & Services',
                'description' => 'PT Aro Baskara Esa merupakan perusahaan yang bergerak di bidang distribusi alat kesehatan dan layanan teknik spesialis.',
                'image' => 'assets/img/create-account-office.jpeg',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'ABE INTEKNO INDONESIA',
                'slug' => 'abe-intekno-indonesia',
                'category' => 'Technology & Innovation',
                'description' => 'PT Abe Intekno Indonesia berfokus pada pengembangan teknologi informasi dan inovasi digital.',
                'image' => 'assets/img/forgot-password-office.jpeg',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'ayobelanja.co.id',
                'slug' => 'ayobelanja-co-id',
                'category' => 'E-Commerce Platform',
                'description' => 'Platform e-commerce yang mengintegrasikan ekosistem belanja digital dengan kemudahan akses.',
                'image' => 'assets/img/login-office.jpeg',
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($businesses as $b) {
            Business::updateOrCreate(['slug' => $b['slug']], $b);
        }

        // 5. Keunggulan
        $values = [
            ['title' => 'Visi Strategis', 'icon' => 'fas fa-bullseye', 'desc' => 'Penciptaan nilai jangka panjang melalui investasi strategis dan keunggulan operasional'],
            ['title' => 'Inovasi Utama', 'icon' => 'fas fa-bolt', 'desc' => 'Mendorong transformasi di berbagai industri dengan solusi terdepan'],
            ['title' => 'Integritas & Kepercayaan', 'icon' => 'fas fa-shield-halved', 'desc' => 'Membangun hubungan yang langgeng melalui transparansi dan praktik etis'],
            ['title' => 'Pertumbuhan Berkelanjutan', 'icon' => 'fas fa-lightbulb', 'desc' => 'Praktik bisnis yang bertanggung jawab untuk dampak lingkungan dan sosial yang positif'],
        ];

        CoreValue::truncate();
        foreach ($values as $v) {
            CoreValue::create([
                'title' => $v['title'],
                'icon' => $v['icon'],
                'description' => $v['desc'],
                'is_active' => true,
                'order' => 0,
            ]);
        }

        // 6. Mitra Terpercaya (Dinamis dengan Logo Asli)
        $partners = [
            ['name' => 'Acer', 'domain' => 'acer.com'],
            ['name' => 'Panasonic', 'domain' => 'panasonic.com'],
            ['name' => 'HP', 'domain' => 'hp.com'],
            ['name' => 'APC', 'domain' => 'apc.com'],
            ['name' => 'Dell', 'domain' => 'dell.com'],
            ['name' => 'Microsoft', 'domain' => 'microsoft.com'],
            ['name' => 'Google', 'domain' => 'google.com'],
            ['name' => 'Amazon', 'domain' => 'amazon.com'],
            ['name' => 'Cisco', 'domain' => 'cisco.com'],
            ['name' => 'IBM', 'domain' => 'ibm.com'],
        ];

        Company::truncate();
        foreach ($partners as $index => $p) {
            Company::create([
                'name' => $p['name'],
                'slug' => Str::slug($p['name']),
                'logo' => "https://logo.clearbit.com/{$p['domain']}",
                'is_active' => true,
                'order' => $index + 1,
            ]);
        }
    }
}
