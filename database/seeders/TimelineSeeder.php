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
            'year' => '2018',
            'title' => 'Transformasi Digital',
            'description' => 'Meluncurkan platform digital terintegrasi yang revolusioner',
            'label' => 'DIGITAL ERA',
            'position' => 'left',
            'theme' => 'blue',
            'tags' => ['Digital', 'Innovation'],
            'is_active' => true,
            'order' => 3,
        ]);

        Timeline::create([
            'year' => '2020',
            'title' => '1000+ Karyawan',
            'description' => 'Mencapai milestone 1000+ karyawan berdedikasi di seluruh Indonesia',
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
            'description' => 'Memperluas operasi ke pasar regional Asia Tenggara',
            'label' => 'GLOBAL REACH',
            'position' => 'left',
            'theme' => 'blue',
            'tags' => ['Regional', 'ASEAN'],
            'is_active' => true,
            'order' => 5,
        ]);

        Timeline::create([
            'year' => '2024',
            'title' => 'Era Baru Inovasi',
            'description' => 'Memimpin era baru inovasi teknologi dengan AI dan ML',
            'label' => 'FUTURE NOW',
            'position' => 'right',
            'theme' => 'orange',
            'tags' => ['AI', 'ML', 'Future'],
            'is_active' => true,
            'order' => 6,
        ]);
    }
}
