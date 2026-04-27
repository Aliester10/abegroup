<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #eee; border-radius: 10px; }
        .header { background-color: #f8f9fa; padding: 15px; text-align: center; border-radius: 10px 10px 0 0; }
        .content { padding: 20px; }
        .footer { text-align: center; font-size: 0.8em; color: #777; margin-top: 20px; }
        .status-accepted { color: #28a745; font-weight: bold; }
        .status-rejected { color: #dc3545; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Update Status Lamaran</h2>
        </div>
        <div class="content">
            <p>Halo <strong>{{ $application->name }}</strong>,</p>
            
            <p>Terima kasih telah melamar posisi <strong>{{ $application->job_vacancy->title }}</strong> di perusahaan kami.</p>

            <p>Kami ingin menginformasikan bahwa status lamaran Anda saat ini adalah: 
                @if($application->status == 'accepted')
                    <span class="status-accepted">DITERIMA / LANJUT KE TAHAP BERIKUTNYA</span>
                @elseif($application->status == 'rejected')
                    <span class="status-rejected">TIDAK DAPAT DILANJUTKAN</span>
                @else
                    <strong>{{ ucfirst($application->status) }}</strong>
                @endif
            </p>

            @if($application->status == 'accepted')
                <p>Selamat! Tim kami akan segera menghubungi Anda melalui email atau nomor telepon untuk mengatur jadwal interview atau tahap selanjutnya.</p>
            @elseif($application->status == 'rejected')
                <p>Mohon maaf, saat ini kami belum dapat melanjutkan proses lamaran Anda ke tahap berikutnya. Kami akan menyimpan resume Anda di database kami untuk peluang di masa mendatang yang mungkin sesuai dengan kualifikasi Anda.</p>
            @endif

            <p>Terima kasih atas minat Anda terhadap perusahaan kami.</p>
            
            <p>Salam,<br>
            <strong>Tim HRD {{ config('app.name') }}</strong></p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        </div>
    </div>
</body>
</html>
