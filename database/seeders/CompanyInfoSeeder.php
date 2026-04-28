<?php

namespace Database\Seeders;

use App\Models\CompanyInfo;
use Illuminate\Database\Seeder;

class CompanyInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyInfo::updateOrCreate(
            ['email' => 'arobaskara@gmail.com'],
            [
                'office_address' => 'Jl. TM. Slamet Riyadi Raya No. 9 RT.1 RW. 4 Kb. Manggis, Kec. Matraman, Daerah Khusus Ibukota Jakarta 13150',
                'phone' => '(021) 38835187',
                'phone_alt' => '+62 822-8888-6009',
                'email_alt' => 'ayobelanja.co.id',
                'operational_hours' => 'Senin - Jumat: 08.00 - 17.00 WIB',
                'map_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m12!1m3!1d3966.452674395641!2d106.8558455!3d-6.2038595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f46b4129a007%3A0xc34a5d89d3a778e7!2sJl.%20Slamet%20Riyadi%20Raya%20No.9%2C%20RT.1%2FRW.4%2C%20Kb.%20Manggis%2C%20Kec.%20Matraman%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013150!5e0!3m2!1sid!2sid!4v1714292000000!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'is_active' => true,
            ]
        );
    }
}
