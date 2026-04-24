<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutSection;

class AboutSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutSection::updateOrCreate(
            ['title' => 'Mengenal <span class="text-orange-600">ABE Group</span>'],
            [
                'title' => 'Mengenal <span class="text-orange-600">ABE Group</span>',
                'subtitle' => 'Tentang Kami',
                'content' => 'Didirikan dengan semangat membangun ekosistem bisnis yang kuat, <span class="font-bold">ABE Group</span> hadir sebagai entitas induk yang mengintegrasikan berbagai sektor usaha untuk menciptakan sinergi yang optimal. Dengan portofolio yang mencakup layanan teknik & teknologi, serta platform e-commerce, ABE Group berkomitmen untuk memberikan solusi bisnis terbaik bagi mitra dan klien di seluruh Indonesia.',
                'image' => 'login-office.jpeg',
                'is_active' => true,
                'order' => 1,
            ]
        );
    }
}
