<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            ['name' => 'Microsoft', 'order' => 1],
            ['name' => 'Google', 'order' => 2],
            ['name' => 'Amazon', 'order' => 3],
            ['name' => 'Oracle', 'order' => 4],
            ['name' => 'SAP', 'order' => 5],
            ['name' => 'Salesforce', 'order' => 6],
            ['name' => 'IBM', 'order' => 7],
            ['name' => 'Cisco', 'order' => 8],
        ];

        foreach ($companies as $companyData) {
            Company::updateOrCreate(
                ['name' => $companyData['name']],
                [
                    'slug' => \Illuminate\Support\Str::slug($companyData['name']),
                    'description' => "Partner terpercaya dalam solusi teknologi {$companyData['name']}",
                    'website_url' => "https://www." . strtolower($companyData['name']) . ".com",
                    'is_active' => true,
                    'order' => $companyData['order'],
                ]
            );
        }
    }
}
