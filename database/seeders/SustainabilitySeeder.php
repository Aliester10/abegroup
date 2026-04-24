<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sustainability;

class SustainabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sustainability::create([
            'title' => 'Komitmen Keberlanjutan',
            'subtitle' => 'Bertumbuh dengan tanggung jawab',
            'description' => 'Kami memastikan pertumbuhan bisnis berjalan selaras dengan kepatuhan, efisiensi energi, dan kontribusi sosial.',
            'image_url' => null,
            'button_text' => 'Kolaborasi Bersama Kami',
            'button_url' => '/hubungi',
            'points' => [
                'Efisiensi sumber daya dan pengelolaan risiko operasional',
                'Kepatuhan dan tata kelola yang kuat di seluruh unit bisnis',
                'Inisiatif sosial dan peningkatan kapabilitas SDM',
            ],
            'is_active' => true,
        ]);
    }
}
