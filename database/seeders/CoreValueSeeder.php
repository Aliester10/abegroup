<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CoreValue;

class CoreValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CoreValue::truncate();

        $coreValues = [
            [
                'title' => 'Visi Strategis',
                'description' => 'Fokus jangka panjang berbasis data dan eksekusi.',
                'icon' => 'fas fa-eye',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Inovasi Utama',
                'description' => 'Membangun solusi relevan untuk kebutuhan pasar.',
                'icon' => 'fas fa-lightbulb',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Integritas & Kepercayaan',
                'description' => 'Menjaga kualitas dengan standar etika tinggi.',
                'icon' => 'fas fa-shield-halved',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Pertumbuhan Berkelanjutan',
                'description' => 'Mendorong profit sekaligus dampak positif.',
                'icon' => 'fas fa-chart-line',
                'order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($coreValues as $coreValue) {
            CoreValue::create($coreValue);
        }
    }
}
