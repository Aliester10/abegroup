<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HomeStat;

class HomeStatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeStat::truncate();

        HomeStat::create([
            'label' => 'Pendapatan Tahunan',
            'value' => 115,
            'suffix' => 'M',
            'icon' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path d="M10.75 10.5h5.5a.75.75 0 000-1.5h-5.5a.75.75 0 000 1.5z"/><path fill-rule="evenodd" d="M4 3.5A1.5 1.5 0 015.5 2h9A1.5 1.5 0 0116 3.5v13A1.5 1.5 0 0114.5 18h-9A1.5 1.5 0 014 16.5v-13zM5.5 3.5v13h9v-13h-9z" clip-rule="evenodd"/></svg>',
            'order' => 1,
            'is_active' => true,
        ]);

        HomeStat::create([
            'label' => 'Karyawan Global',
            'value' => 450,
            'suffix' => '+',
            'icon' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path d="M13 7a3 3 0 11-6 0 3 3 0 016 0z"/><path fill-rule="evenodd" d="M10 11a6 6 0 00-6 6 .75.75 0 001.5 0 4.5 4.5 0 019 0 .75.75 0 001.5 0 6 6 0 00-6-6z" clip-rule="evenodd"/></svg>',
            'order' => 2,
            'is_active' => true,
        ]);

        HomeStat::create([
            'label' => 'Kota',
            'value' => 10,
            'suffix' => '+',
            'icon' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M9.69 18.933a.75.75 0 01-.638-.352l-3.84-6.144a6.5 6.5 0 1110.976 0l-3.84 6.144a.75.75 0 01-.638.352zm.31-8.433a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>',
            'order' => 3,
            'is_active' => true,
        ]);

        HomeStat::create([
            'label' => 'Mitra',
            'value' => 20,
            'suffix' => '+',
            'icon' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 5.5A2.5 2.5 0 118.5 8 2.5 2.5 0 016 5.5zM11.5 11a3 3 0 00-2.994 2.824L8.5 14v2.25a.75.75 0 001.5 0V14a1.5 1.5 0 011.356-1.493L11.5 12.5h2a1.5 1.5 0 011.493 1.356L15 14v2.25a.75.75 0 001.5 0V14a3 3 0 00-3-3h-2z" clip-rule="evenodd"/><path d="M12 5.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/></svg>',
            'order' => 4,
            'is_active' => true,
        ]);
    }
}
