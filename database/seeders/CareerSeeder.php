<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobCategory;
use App\Models\JobVacancy;
use App\Models\Benefits;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        JobVacancy::query()->delete();
        JobCategory::query()->delete();
        Benefits::query()->delete();

        // 1. Seed Job Categories
        $catIt = JobCategory::create(['name' => 'IT']);
        $catFinance = JobCategory::create(['name' => 'Finance & Accounting']);
        $catProduction = JobCategory::create(['name' => 'Production']);
        $catSales = JobCategory::create(['name' => 'Sales & Marketing']);

        // 2. Seed Benefits
        $benefits = [
            [
                'title' => 'Jenjang Karir Terstruktur',
                'description' => 'Kami menyediakan jalur karir yang jelas dan program pelatihan internal bersertifikat untuk membantu Anda tumbuh menjadi pemimpin masa depan di industri manufaktur.',
                'icon' => 'benefits/career_path.png',
                'order' => 1,
                'status' => 'active'
            ],
            [
                'title' => 'Pengembangan Skill Berkelanjutan',
                'description' => 'Kami memberikan kesempatan bagi karyawan untuk terus berkembang melalui pelatihan, workshop, dan pembelajaran berkelanjutan agar tetap relevan dengan kebutuhan industri.',
                'icon' => 'benefits/skill_development.png',
                'order' => 2,
                'status' => 'active'
            ],
            [
                'title' => 'Budaya Kerja Kolaboratif',
                'description' => 'Kami membangun lingkungan kerja yang mendorong kerja sama tim, komunikasi terbuka, dan saling menghargai untuk mencapai tujuan bersama secara efektif.',
                'icon' => 'benefits/work_culture.png',
                'order' => 3,
                'status' => 'active'
            ],
            [
                'title' => 'Asuransi Kesehatan Komprehensif',
                'description' => 'Perlindungan kesehatan lengkap mencakup rawat jalan, rawat inap, dan tunjangan kacamata bagi karyawan dan keluarga inti.',
                'icon' => 'benefits/health_insurance.png',
                'order' => 4,
                'status' => 'active'
            ],
            [
                'title' => 'Lingkungan Kerja Aman & Higienis',
                'description' => 'Memprioritaskan keselamatan dengan standar K3 (HSE) internasional dan fasilitas kerja yang modern serta bersih demi kenyamanan Anda di area operasional.',
                'icon' => 'benefits/safe_environment.png',
                'order' => 5,
                'status' => 'active'
            ]
        ];

        foreach ($benefits as $benefit) {
            Benefits::create($benefit);
        }

        // 3. Seed Job Vacancies
        JobVacancy::create([
            'name' => 'IT Support & ERP Administrator',
            'job_category_id' => $catIt->id,
            'type' => 'full_time',
            'experience' => '1-2 Tahun',
            'location' => 'Remote / Hybrid',
            'description' => 'Menjamin seluruh sistem informasi perusahaan, termasuk database produk mitra dan sistem stok, berjalan tanpa kendala.',
            'responsibility' => "Memberikan dukungan teknis (hardware/software) kepada karyawan.\nMengelola hak akses pengguna pada sistem ERP perusahaan.\nMelakukan backup data secara berkala.",
            'qualification' => "S1 Teknik Informatika / Sistem Informasi.\nPaham mengenai manajemen database SQL.\nMemiliki kemampuan problem-solving yang baik.",
            'status' => 'active'
        ]);

        JobVacancy::create([
            'name' => 'Staff Akuntansi Biaya (Cost Accounting)',
            'job_category_id' => $catFinance->id,
            'type' => 'full_time',
            'experience' => '1-2 Tahun',
            'location' => 'Head Office',
            'description' => 'Mengelola laporan biaya produksi dan memantau arus kas yang berkaitan dengan pembelian barang dari mitra.',
            'responsibility' => "Menghitung Harga Pokok Produksi (HPP) secara akurat.\nMelakukan rekonsiliasi data stok gudang dengan laporan keuangan.\nMengelola faktur pajak dari supplier mitra.",
            'qualification' => "S1 Akuntansi dengan IPK minimal 3.00.\nMenguasai software akuntansi (SAP/Odoo) dan Excel (Vlookup/Pivot).\nDetail-oriented dan jujur.",
            'status' => 'active'
        ]);

        JobVacancy::create([
            'name' => 'Teknisi Mesin Produksi',
            'job_category_id' => $catProduction->id,
            'type' => 'full_time',
            'experience' => 'Fresh Graduate / 1 Tahun',
            'location' => 'Kawasan Industri, Bekasi',
            'description' => 'Melakukan perawatan rutin dan perbaikan pada mesin-mesin manufaktur untuk memastikan kelancaran operasional pabrik.',
            'responsibility' => "Melaksanakan preventive maintenance sesuai jadwal.\nMenangani troubleshooting pada sistem mekanik dan elektrik.\nMelaporkan penggunaan suku cadang kepada supervisor.",
            'qualification' => "Lulusan SMK Teknik Mesin / Teknik Elektro.\nPaham mengenai sistem hidrolik and pneumatik.\nBersedia bekerja dalam sistem shift.",
            'status' => 'active'
        ]);

        JobVacancy::create([
            'name' => 'Sales B2B Corporate',
            'job_category_id' => $catSales->id,
            'type' => 'full_time',
            'experience' => '2-3 Tahun',
            'location' => 'Jakarta / On-site',
            'description' => 'Bertanggung jawab dalam mencari klien korporasi baru dan memasarkan produk mesin industri milik perusahaan serta produk sparepart dari mitra resmi.',
            'responsibility' => "Mencapai target penjualan bulanan yang telah ditetapkan.\nMembangun hubungan baik dengan mitra distributor.\nMelakukan presentasi produk kepada calon klien industri.",
            'qualification' => "Minimal D3/S1 semua jurusan (diutamakan Teknik atau Bisnis).\nMemiliki kemampuan negosiasi yang kuat.\nMampu mengendarai mobil dan memiliki SIM A.",
            'status' => 'active'
        ]);
    }
}
