<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Partner;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partners = [
            ['name' => 'Microsoft', 'order' => 1],
            ['name' => 'Google', 'order' => 2],
            ['name' => 'Amazon', 'order' => 3],
            ['name' => 'Oracle', 'order' => 4],
            ['name' => 'SAP', 'order' => 5],
            ['name' => 'Salesforce', 'order' => 6],
            ['name' => 'IBM', 'order' => 7],
            ['name' => 'Cisco', 'order' => 8],
        ];

        foreach ($partners as $partnerData) {
            Partner::updateOrCreate(
                ['name' => $partnerData['name']],
                [
                    'slug' => \Illuminate\Support\Str::slug($partnerData['name']),
                    'description' => "Partner terpercaya dalam solusi teknologi {$partnerData['name']}",
                    'website_url' => "https://www." . strtolower($partnerData['name']) . ".com",
                    'is_active' => true,
                    'order' => $partnerData['order'],
                ]
            );
        }
    }
}
