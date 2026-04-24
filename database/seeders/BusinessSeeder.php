<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Business;

class BusinessSeeder extends Seeder
{
    public function run()
    {
        $businesses = [
            [
                'name' => 'ABE Intekno Indonesia',
                'category' => 'Teknologi',
                'slug' => 'abe-intekno-indonesia',
                'image' => 'assets/business/abe-intekno.jpg',
                'website_link' => '#',
                'description' => 'ABE Intekno Indonesia adalah perusahaan teknologi yang menyediakan solusi digital inovatif, sistem integrasi, dan layanan IT profesional.',
                'is_active' => true,
                'order' => 1,
            ],
            [
                'name' => 'ARO Baskara Esa',
                'category' => 'Konstruksi',
                'slug' => 'aro-baskara-esa',
                'image' => 'assets/business/aro-baskara.jpg',
                'website_link' => '#',
                'description' => 'ARO Baskara Esa merupakan perusahaan yang bergerak di bidang konstruksi, infrastruktur, dan pengembangan proyek fisik berkualitas tinggi.',
                'is_active' => true,
                'order' => 2,
            ],
        ];

        foreach ($businesses as $business) {
            Business::updateOrCreate(['slug' => $business['slug']], $business);
        }
    }
}
