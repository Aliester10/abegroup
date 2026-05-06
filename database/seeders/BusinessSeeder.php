<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Business;

class BusinessSeeder extends Seeder
{
    public function run(): void
    {
        $businesses = [
            [
                'name' => 'ARO BASKARA ESA',
                'slug' => 'aro-baskara-esa',
                'category' => 'Engineering & Services',
                'image' => 'assets/img/aro-baskara.jpg',
                'description' => 'PT Aro Baskara Esa merupakan perusahaan yang bergerak di bidang distribusi alat kesehatan...',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'ABE INTEKNO INDONESIA',
                'slug' => 'abe-intekno-indonesia',
                'category' => 'Technology & Innovation',
                'image' => 'assets/img/abe-intekno.jpg',
                'description' => 'PT Abe Intekno Indonesia merupakan perusahaan yang bergerak di bidang jasa konsultasi IT...',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'ayobelanja.co.id',
                'slug' => 'ayobelanja-co-id',
                'category' => 'E-Commerce Platform',
                'image' => 'assets/img/ayobelanja.jpg',
                'description' => 'ayobelanja.co.id merupakan platform yang menyediakan berbagai kebutuhan anda...',
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($businesses as $data) {
            Business::updateOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
