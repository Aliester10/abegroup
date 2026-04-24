<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Timeline;

class TimelineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncate table before seeding to avoid duplicates
        Timeline::truncate();

        Timeline::create([
            'year' => '2010',
            'title' => 'Pendirian ABE Group',
            'description' => 'Didirikan dengan visi menjadi perusahaan holding terdepan di Indonesia',
            'label' => 'THE BEGINNING',
            'position' => 'left',
            'theme' => 'blue',
            'tags' => ['Startup', 'Vision'],
            'is_active' => true,
            'order' => 1,
        ]);

        Timeline::create([
            'year' => '2013',
            'title' => 'Ekspansi Bisnis',
            'description' => 'Meluncurkan 5 unit bisnis baru di sektor teknologi dan logistik',
            'label' => 'GROWTH PHASE',
            'position' => 'right',
            'theme' => 'orange',
            'tags' => ['Expansion', '5 Units'],
            'is_active' => true,
            'order' => 2,
        ]);

        Timeline::create([
            'year' => '2016',
            'title' => 'Transformasi Digital',
            'description' => 'Memulai inisiatif transformasi digital di seluruh unit bisnis',
            'label' => 'DIGITAL ERA',
            'position' => 'left',
            'theme' => 'blue',
            'tags' => ['Digital', 'Innovation'],
            'is_active' => true,
            'order' => 3,
        ]);

        Timeline::create([
            'year' => '2019',
            'title' => 'Pencapaian 1000+ Karyawan',
            'description' => 'Milestone penting dengan tim yang terus berkembang',
            'label' => 'MILESTONE',
            'position' => 'right',
            'theme' => 'orange',
            'tags' => ['Team', '1000+'],
            'is_active' => true,
            'order' => 4,
        ]);

        Timeline::create([
            'year' => '2022',
            'title' => 'Ekspansi Regional',
            'description' => 'Membuka kantor di 20+ kota di Indonesia',
            'label' => 'REGIONAL EXPANSION',
            'position' => 'left',
            'theme' => 'blue',
            'tags' => ['Regional', 'Expansion'],
            'is_active' => true,
            'order' => 5,
        ]);

        Timeline::create([
            'year' => '2026',
            'title' => 'Era Baru Inovasi',
            'description' => 'Fokus pada AI, sustainability, dan teknologi masa depan',
            'label' => 'FUTURE NOW',
            'position' => 'right',
            'theme' => 'orange',
            'tags' => ['AI', 'Sustainability', 'Future'],
            'is_active' => true,
            'order' => 6,
        ]);
    }
}
