<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newsData = [
            // Pencapaian
            [
                'title' => 'ABE Group Raih Penghargaan Best Corporate Governance 2026',
                'category' => 'pencapaian',
                'excerpt' => 'ABE Group berhasil meraih penghargaan Best Corporate Governance dari Indonesia Corporate Governance Award 2026, menegaskan komitmen perusahaan terhadap tata kelola yang transparan dan akuntabel.',
                'content' => 'ABE Group berhasil meraih penghargaan Best Corporate Governance dari Indonesia Corporate Governance Award 2026. Penghargaan ini diberikan sebagai bentuk apresiasi atas komitmen perusahaan dalam menerapkan prinsip-prinsip tata kelola perusahaan yang baik (Good Corporate Governance). Dalam ajang bergengsi ini, ABE Group dinilai unggul dalam aspek transparansi, akuntabilitas, dan tanggung jawab sosial. CEO ABE Group menyatakan bahwa penghargaan ini menjadi motivasi untuk terus meningkatkan standar tata kelola perusahaan.',
                'created_at' => '2026-04-18 10:00:00',
            ],
            [
                'title' => 'Antar Rajh Penghasilan Best Sustainability: Lowest Loss of Rating',
                'category' => 'pencapaian',
                'excerpt' => 'Pencapaian luar biasa dalam bidang keberlanjutan dengan meraih predikat Lowest Loss of Rating dari lembaga pemeringkat internasional.',
                'content' => 'ABE Group melalui anak perusahaannya berhasil meraih predikat Lowest Loss of Rating dari lembaga pemeringkat keberlanjutan internasional. Pencapaian ini menunjukkan konsistensi perusahaan dalam menjaga standar keberlanjutan yang tinggi. Berbagai program ESG (Environmental, Social, and Governance) yang telah dilaksanakan selama bertahun-tahun terbukti memberikan dampak positif yang terukur. Hal ini memperkuat posisi ABE Group sebagai pemimpin dalam praktik bisnis berkelanjutan di Indonesia.',
                'created_at' => '2026-04-14 09:30:00',
            ],
            [
                'title' => 'ABE Group Masuk Daftar Top 50 Perusahaan Terbaik di Indonesia',
                'category' => 'pencapaian',
                'excerpt' => 'ABE Group berhasil masuk dalam daftar Top 50 perusahaan terbaik di Indonesia versi majalah bisnis terkemuka.',
                'content' => 'Dalam survei tahunan yang dilakukan oleh salah satu majalah bisnis terkemuka di Indonesia, ABE Group berhasil masuk dalam daftar Top 50 perusahaan terbaik. Penilaian didasarkan pada kinerja keuangan, inovasi, tata kelola perusahaan, dan kontribusi sosial. ABE Group menduduki peringkat yang sangat baik berkat pertumbuhan pendapatan yang konsisten dan program-program inovatif yang diluncurkan sepanjang tahun.',
                'created_at' => '2026-04-06 14:00:00',
            ],

            // Keberlanjutan
            [
                'title' => 'Kampanye Peduli Lingkungan: Tanam 10,000 Pohon',
                'category' => 'keberlanjutan',
                'excerpt' => 'ABE Group meluncurkan program penanaman 10.000 pohon di berbagai wilayah Indonesia sebagai bagian dari komitmen terhadap lingkungan.',
                'content' => 'ABE Group meluncurkan program penanaman 10.000 pohon yang tersebar di 5 provinsi di Indonesia. Program ini merupakan bagian dari inisiatif Go Green ABE yang bertujuan untuk mengurangi jejak karbon perusahaan. Kegiatan ini melibatkan lebih dari 2.000 karyawan dan masyarakat lokal. Selain penanaman pohon, program ini juga mencakup edukasi lingkungan bagi komunitas setempat dan pembentukan kelompok tani hutan untuk menjaga keberlanjutan hutan yang ditanami.',
                'created_at' => '2026-04-06 08:00:00',
            ],
            [
                'title' => 'Program CSR Bantuan Renovasi Sekolah di Daerah Terpencil',
                'category' => 'keberlanjutan',
                'excerpt' => 'ABE Group memperbaiki 25 sekolah di daerah terpencil sebagai bentuk kepedulian terhadap pendidikan Indonesia.',
                'content' => 'Melalui program CSR andalannya, ABE Group berhasil merenovasi 25 sekolah dasar di daerah terpencil di Indonesia Timur. Program renovasi mencakup perbaikan gedung, pengadaan peralatan belajar modern, perpustakaan, dan laboratorium komputer. Tidak hanya itu, ABE Group juga mengirimkan tenaga pengajar sukarelawan untuk mendampingi siswa selama 6 bulan. Program ini telah memberikan dampak positif bagi lebih dari 5.000 siswa di wilayah tersebut.',
                'created_at' => '2026-04-10 11:00:00',
            ],
            [
                'title' => 'Implementasi Energi Terbarukan di Seluruh Pabrik ABE Group',
                'category' => 'keberlanjutan',
                'excerpt' => 'ABE Group berkomitmen menggunakan 100% energi terbarukan di seluruh fasilitas produksinya pada tahun 2028.',
                'content' => 'ABE Group mengumumkan rencana ambisius untuk mengimplementasikan energi terbarukan di seluruh fasilitas produksinya. Saat ini, 60% kebutuhan energi pabrik sudah dipasok dari panel surya dan turbin angin. Investasi senilai Rp 500 miliar telah dialokasikan untuk proyek ini, dan diharapkan pada tahun 2028 seluruh pabrik akan beroperasi dengan 100% energi terbarukan. Langkah ini menjadikan ABE Group sebagai pelopor energi bersih di sektor manufaktur Indonesia.',
                'created_at' => '2026-03-28 09:00:00',
            ],

            // Penghargaan
            [
                'title' => 'Penandatanganan MoU dengan Universitas Terkemuka',
                'category' => 'penghargaan',
                'excerpt' => 'ABE Group menandatangani MoU dengan tiga universitas terkemuka untuk program pengembangan talenta dan riset bersama.',
                'content' => 'ABE Group resmi menandatangani Memorandum of Understanding (MoU) dengan tiga universitas terkemuka di Indonesia: Universitas Indonesia, Institut Teknologi Bandung, dan Universitas Gadjah Mada. Kerja sama ini mencakup program magang terstruktur, riset bersama di bidang teknologi, dan beasiswa untuk mahasiswa berprestasi. Melalui kolaborasi ini, ABE Group berharap dapat memperkuat pipeline talenta dan mendorong inovasi berbasis riset.',
                'created_at' => '2026-04-09 13:00:00',
            ],
            [
                'title' => 'ABE Group Terima Indonesia Green Award untuk Inovasi Lingkungan',
                'category' => 'penghargaan',
                'excerpt' => 'Inovasi dalam pengelolaan limbah produksi membawa ABE Group meraih Indonesia Green Award 2026.',
                'content' => 'ABE Group meraih Indonesia Green Award 2026 dalam kategori Inovasi Pengelolaan Limbah Industri. Sistem pengelolaan limbah terintegrasi yang dikembangkan perusahaan berhasil mengurangi limbah produksi hingga 80% dan mengubahnya menjadi bahan baku sekunder yang bernilai ekonomis. Penghargaan ini menegaskan komitmen ABE Group dalam mewujudkan ekonomi sirkular di sektor industri Indonesia.',
                'created_at' => '2026-03-25 10:00:00',
            ],

            // Berita
            [
                'title' => 'Indomaret Aset Hadirkan Skala Air Lengkap Rayvol Pertamanya di Indonesia',
                'category' => 'berita',
                'excerpt' => 'Peluncuran fasilitas pengolahan air skala besar pertama oleh Indomaret Aset di Indonesia, menjawab kebutuhan air bersih masyarakat.',
                'content' => 'Indomaret Aset resmi meluncurkan fasilitas pengolahan air skala besar pertamanya di Indonesia. Fasilitas ini menggunakan teknologi Rayvol terkini yang mampu mengolah air dengan kapasitas 10.000 liter per jam. Investasi ini merupakan bagian dari strategi diversifikasi bisnis ABE Group ke sektor utilitas. Fasilitas yang berlokasi di Jawa Barat ini diharapkan dapat melayani kebutuhan air bersih bagi 50.000 rumah tangga di sekitarnya.',
                'created_at' => '2026-04-18 08:00:00',
            ],
            [
                'title' => 'Dukung Miliaran dari Kemampuan Jakarta! Pembangunan Pabrik CE',
                'category' => 'berita',
                'excerpt' => 'ABE Group mendukung pembangunan pabrik Consumer Electronics baru di kawasan industri Jakarta dengan investasi miliaran rupiah.',
                'content' => 'ABE Group mengumumkan dukungan investasi senilai miliaran rupiah untuk pembangunan pabrik Consumer Electronics (CE) baru di kawasan industri Jakarta Timur. Pabrik ini akan memproduksi berbagai perangkat elektronik konsumen dengan standar internasional. Pembangunan diharapkan selesai dalam 18 bulan dan akan menciptakan lebih dari 3.000 lapangan kerja baru. Langkah ini sejalan dengan visi pemerintah untuk memperkuat industri manufaktur elektronik nasional.',
                'created_at' => '2026-04-16 10:30:00',
            ],
            [
                'title' => 'ABE Group Ekspansi Bisnis ke Asia Tenggara',
                'category' => 'berita',
                'excerpt' => 'Ekspansi strategis ABE Group ke pasar Vietnam dan Thailand sebagai langkah menuju perusahaan multinasional.',
                'content' => 'ABE Group resmi mengumumkan rencana ekspansi bisnis ke pasar Asia Tenggara, dimulai dari Vietnam dan Thailand. Perusahaan telah membentuk dua anak perusahaan baru yang akan beroperasi di kedua negara tersebut. Ekspansi ini merupakan bagian dari rencana strategis jangka panjang untuk menjadikan ABE Group sebagai pemain regional yang kuat. Investasi awal sebesar USD 50 juta telah dialokasikan untuk membangun infrastruktur bisnis di kedua negara.',
                'created_at' => '2026-04-02 09:00:00',
            ],

            // Cerita Inovasi
            [
                'title' => 'Kolaborasi dengan Startup Teknologi untuk Akselerasi Digital',
                'category' => 'cerita-inovasi',
                'excerpt' => 'ABE Group menggandeng 10 startup teknologi terkemuka untuk mengakselerasi transformasi digital perusahaan.',
                'content' => 'Dalam upaya mempercepat transformasi digital, ABE Group menjalin kolaborasi strategis dengan 10 startup teknologi terkemuka di Indonesia. Program kolaborasi ini mencakup pengembangan solusi AI untuk optimasi rantai pasok, implementasi IoT di fasilitas produksi, dan pengembangan platform e-commerce B2B. Melalui program akselerasi ini, ABE Group berhasil meningkatkan efisiensi operasional hingga 35% dan mengurangi waktu proses bisnis secara signifikan.',
                'created_at' => '2026-04-12 14:00:00',
            ],
            [
                'title' => 'Peluncuran Aplikasi Mobile untuk Layanan Pelanggan',
                'category' => 'cerita-inovasi',
                'excerpt' => 'ABE Group meluncurkan aplikasi mobile terbaru yang memudahkan pelanggan mengakses seluruh layanan dalam satu genggaman.',
                'content' => 'ABE Group resmi meluncurkan aplikasi mobile "ABE Connect" yang menyatukan seluruh layanan pelanggan dalam satu platform. Aplikasi ini dilengkapi fitur chatbot AI, tracking pesanan real-time, program loyalitas digital, dan akses ke katalog produk lengkap. Dalam dua minggu sejak peluncuran, aplikasi ini telah diunduh lebih dari 100.000 kali dan mendapatkan rating 4.8 di App Store dan Google Play.',
                'created_at' => '2026-04-04 11:00:00',
            ],
            [
                'title' => 'Workshop Teknologi AI untuk Mahasiswa Indonesia',
                'category' => 'cerita-inovasi',
                'excerpt' => 'ABE Group menggelar workshop teknologi AI gratis untuk 1.000 mahasiswa dari berbagai universitas di Indonesia.',
                'content' => 'ABE Group melalui divisi Technology & Innovation menggelar workshop teknologi Artificial Intelligence (AI) secara gratis untuk 1.000 mahasiswa dari 20 universitas di Indonesia. Workshop berlangsung selama 3 hari dengan materi mencakup machine learning, natural language processing, dan computer vision. Peserta juga berkesempatan untuk berpartisipasi dalam hackathon dengan total hadiah Rp 1 miliar. Kegiatan ini merupakan bagian dari komitmen ABE Group dalam membangun ekosistem teknologi di Indonesia.',
                'created_at' => '2026-04-02 13:00:00',
            ],

            // Pengumuman
            [
                'title' => 'Pembukaan Lowongan Kerja Besar-Besaran ABE Group 2026',
                'category' => 'pengumuman',
                'excerpt' => 'ABE Group membuka 500+ posisi di berbagai divisi untuk mendukung ekspansi bisnis di semester kedua 2026.',
                'content' => 'ABE Group mengumumkan pembukaan lowongan kerja besar-besaran untuk lebih dari 500 posisi di berbagai divisi. Posisi yang tersedia meliputi bidang teknologi informasi, keuangan, pemasaran, operasional, dan sumber daya manusia. Rekrutmen ini dilakukan untuk mendukung rencana ekspansi bisnis di semester kedua 2026. Pelamar dapat mendaftar melalui website resmi karir ABE Group mulai 1 Mei 2026. Perusahaan menawarkan paket kompensasi yang kompetitif dan program pengembangan karir yang terstruktur.',
                'created_at' => '2026-04-15 08:00:00',
            ],
            [
                'title' => 'Jadwal RUPS Tahunan ABE Group 2026',
                'category' => 'pengumuman',
                'excerpt' => 'Rapat Umum Pemegang Saham Tahunan ABE Group akan dilaksanakan pada 15 Mei 2026 secara hybrid.',
                'content' => 'Direksi ABE Group mengundang seluruh pemegang saham untuk menghadiri Rapat Umum Pemegang Saham Tahunan (RUPST) yang akan dilaksanakan pada tanggal 15 Mei 2026. Rapat akan diselenggarakan secara hybrid, dengan opsi kehadiran fisik di kantor pusat Jakarta dan virtual melalui platform online. Agenda utama meliputi pengesahan laporan tahunan, pembagian dividen, dan penetapan rencana strategis 2026-2030.',
                'created_at' => '2026-04-08 10:00:00',
            ],
            [
                'title' => 'Perubahan Jam Operasional Kantor ABE Group',
                'category' => 'pengumuman',
                'excerpt' => 'Mulai 1 Mei 2026, ABE Group menerapkan sistem kerja fleksibel dengan jam operasional baru.',
                'content' => 'ABE Group mengumumkan perubahan jam operasional kantor yang berlaku mulai 1 Mei 2026. Perusahaan akan menerapkan sistem kerja fleksibel dengan core hours pukul 10:00-15:00 WIB, sementara karyawan dapat memilih jam masuk antara 07:00-10:00 WIB. Kebijakan ini merupakan hasil dari survei internal yang menunjukkan bahwa fleksibilitas kerja meningkatkan produktivitas dan kepuasan karyawan. Selain itu, opsi work from home tetap tersedia untuk 2 hari per minggu.',
                'created_at' => '2026-03-30 09:00:00',
            ],

            // Tambahan berita untuk memenuhi pagination
            [
                'title' => 'ABE Group Donasikan 1 Miliar untuk Korban Bencana Alam',
                'category' => 'keberlanjutan',
                'excerpt' => 'Respon cepat ABE Group dalam membantu korban bencana alam dengan donasi senilai Rp 1 miliar.',
                'content' => 'ABE Group menyalurkan donasi senilai Rp 1 miliar untuk membantu korban bencana alam yang melanda beberapa wilayah di Indonesia. Selain bantuan dana, perusahaan juga mengirimkan relawan karyawan dan logistik berupa makanan, obat-obatan, dan perlengkapan darurat. Tim tanggap bencana ABE Group telah berkoordinasi dengan BNPB dan organisasi kemanusiaan untuk memastikan bantuan tersalurkan dengan tepat sasaran.',
                'created_at' => '2026-03-22 08:00:00',
            ],
            [
                'title' => 'Peluncuran Program Beasiswa Unggulan ABE Group',
                'category' => 'pengumuman',
                'excerpt' => 'ABE Group meluncurkan program beasiswa unggulan untuk 200 mahasiswa berprestasi dari keluarga kurang mampu.',
                'content' => 'ABE Group meluncurkan Program Beasiswa Unggulan yang akan memberikan bantuan pendidikan penuh kepada 200 mahasiswa berprestasi dari keluarga kurang mampu. Beasiswa ini mencakup biaya kuliah, biaya hidup, dan program mentoring dari para eksekutif ABE Group. Pendaftaran dibuka mulai Juni 2026 untuk mahasiswa S1 dari seluruh universitas di Indonesia. Program ini merupakan investasi jangka panjang ABE Group dalam pengembangan sumber daya manusia Indonesia.',
                'created_at' => '2026-03-20 10:00:00',
            ],
            [
                'title' => 'Grand Opening ABE Innovation Hub di Bandung',
                'category' => 'berita',
                'excerpt' => 'ABE Group meresmikan Innovation Hub di Bandung sebagai pusat riset dan pengembangan teknologi terbaru.',
                'content' => 'ABE Group meresmikan Innovation Hub di kota Bandung yang akan menjadi pusat riset dan pengembangan teknologi terbaru. Fasilitas seluas 5.000 meter persegi ini dilengkapi dengan laboratorium AI, ruang co-working untuk startup binaan, dan auditorium untuk kegiatan seminar teknologi. Innovation Hub ini diharapkan menjadi katalis bagi ekosistem inovasi di Jawa Barat dan mendorong kolaborasi antara industri dan akademisi.',
                'created_at' => '2026-03-18 14:00:00',
            ],
            [
                'title' => 'ABE Group Raih Sertifikasi ISO 27001 untuk Keamanan Data',
                'category' => 'pencapaian',
                'excerpt' => 'Komitmen terhadap keamanan data pelanggan dibuktikan dengan perolehan sertifikasi ISO 27001.',
                'content' => 'ABE Group berhasil meraih sertifikasi ISO 27001:2022 untuk Sistem Manajemen Keamanan Informasi. Sertifikasi ini mencakup seluruh divisi dan anak perusahaan, menegaskan komitmen perusahaan dalam melindungi data pelanggan dan informasi bisnis. Proses sertifikasi melibatkan audit menyeluruh selama 6 bulan oleh lembaga sertifikasi internasional. Pencapaian ini menjadikan ABE Group sebagai salah satu konglomerat pertama di Indonesia yang memiliki sertifikasi keamanan data menyeluruh.',
                'created_at' => '2026-03-15 11:00:00',
            ],
        ];

        foreach ($newsData as $news) {
            News::create([
                'title' => $news['title'],
                'slug' => Str::slug($news['title']) . '-' . rand(1000, 9999),
                'category' => $news['category'],
                'excerpt' => $news['excerpt'],
                'content' => $news['content'],
                'image' => null,
                'is_active' => true,
                'created_at' => $news['created_at'],
                'updated_at' => $news['created_at'],
            ]);
        }
    }
}
